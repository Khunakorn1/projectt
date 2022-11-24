<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yoeunes\Toastr\Toastr;
use Image;
use File;


class ContentController extends Controller
{

    private $pathstroage = "admin/contents";

    public function Random()
    {
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for($i = 0; $i < $length; $i++):
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        endfor;

        return $randomString."".time();

    }

    public function index()
    {
        $content = Contents::Paginate(4);
        return view('admin.content.index',compact('content'));
    }

    public function createfome()
    {
        return view('admin.content.create');
    }

    public function insert(Request $request, Contents $content)
    {

        if( !empty($request->file('image')) )
        {
            $imageName = $this->Random().'.'.$request->image->extension();
            $file = $request->file('image');
            $file->move(public_path('contents'), $imageName);
            // $request->image->storeAs('contents', $imageName);
        }else{
            $imageName = null;
        }

        $content->create([

            "name" => $request->name,
            "image" => $imageName,
            "detail" => $request->detail,

        ]);

        toast('บันทึกข้อมูลสำเร็จ','success');

        return redirect()->route('content.index');

    }


    public function edit($id){
        $content = Contents::find($id);
        return view('admin.content.editform',compact('content'));
    }

    // public function update(Request $request, $id){
    //     $content = Contents::find($id);
    //     $content->name = $request->name;
    //     $content->detail = $request->detail;
    //     $content->update();
    //     toast('แก้ไขข้อมูลสำเร็จ','success');
    //     return redirect()->route('content.index');
    // }
public function update($id, Request $request, Contents $content)
    {

        // $Content = Content::find($id);
        // $Content->name = $request->name;
        // $Content->detail = $request->detail;
        // $Content->image = $request->image;
        // $Content->update();

        if( !empty($request->file('image')) ){

            $check = $content->where('id', $id)->first();

            if(!empty($check->image))
            {
                $path = public_path().'/'.$this->path_stroage.'/'.$check->image;
                if( file_exists($path) ):
                    unlink($path);
                endif;
            }

            $imageName = $this->Random().'.'.$request->image->extension();
            $request->image->storeAs('contents', $imageName);

            $content->find($id)->update([

                "name" => $request->name,
                "image" => $imageName,
                "detail" => $request->detail

            ]);

        }else{

            $content->find($id)->update([

                "name" => $request->name,
                "detail" => $request->detail

            ]);

        }

        toast('update ข้อมูลสำเร็จ', 'success');

        return redirect()->route('content.index');

    }

    public function delete($id)
    {
        $content = Contents::find($id);
        $content->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('content.index');
    }

}
