<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yoeunes\Toastr\Toastr;
use Image;
use File;

class ProductController extends Controller
{

    private $path_stroage = "admin/contents";

    public function Random()

    {
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for($i = 0; $i < $length; $i++):
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        endfor;

        return $randomString."_".time();

    }


    public function index()
    {
        $product = Product::Paginate(4);
        return view('admin.product.index',compact('product'));
    }

    public function createform()
    {
        $category = Category::all();
        return view('admin.product.create',compact('category'));
    }

    public function insert(Request $request, Product $product)
    {
        //"name" = $request->name,
        //    "image" = $imageName,
        //    "detail" = $request->detail,
        //    "price" = $request->price,
        //    "category_id" = $request->


        if( !empty($request->file('image')) )
        {
            $imageName = $this->Random().'.'.$request->image->extension();
            $file = $request->file('image');
            $file->move(public_path('products'), $imageName);
            // $request->image->storeAs('products', $imageName);
        }else{
            $imageName = null;
        }

        $product->create([

            "name" => $request->name,
            "image" => $imageName,
            "price" => $request->price,
            "category_id" => $request->category_id,


        ]);

        toast('บันทึกข้อมูลสำเร็จ','success');
        return redirect()->route('product.index');

    }

    // public function insert(Request $request)
    // {
    //     $product = new Product();
    //     $product->name = $request->name;
    //     $product->price = $request->price;
    //     $product->description = $request->description;
    //     $product->id_category = $request->id_category ;
    //     $product->image = $request->image;
    //     $product->save();
    //     toast('บันทีกข้อมูลสำเร็จ','success');
    //     return redirect()->route('product.index');
    // }

    public function edit($product_id)
    {
        $product = Product::find($product_id);
        $category = Category::all();
        return view('admin.product.editform',compact('product','category'));
    }

    // public function update(Request $request, $product_id)
    // {
    //     $product = Product::find($product_id);
    //     $product->name = $request->name;
    //     $product->price = $request->price;
    //     $product->description = $request->description;
    //     $product->id_category = $request->id_category ;
    //     $product->image = $request->image;
    //     $product->update();
    //     toast('แก้ไขข้อมูลสำเร็จ','success');
    //     return redirect()->route('product.index');
    // }

    public function update($product_id, Request $request, Product $product)
    {

        // $Content = Content::find($id);
        // $Content->name = $request->name;
        // $Content->detail = $request->detail;
        // $Content->image = $request->image;
        // $Content->update();

        if( !empty($request->file('image')) ){

            $check = $product->where('id', $product_id)->first();

            if(!empty($check->image))
            {
                $path = public_path().'/'.$this->path_stroage.'/'.$check->image;
                if( file_exists($path) ):
                    unlink($path);
                endif;
            }

            $imageName = $this->Random().'.'.$request->image->extension();
            $request->image->storeAs('products', $imageName);

            $product->find($product_id)->update([

                "name" => $request->name,
                "image" => $imageName,
                "detail" => $request->detail,
                "price" => $request->price,
                "category_id" => $request->category_id

            ]);

        }else{

            $product->find($product_id)->update([

                "name" => $request->name,
                "detail" => $request->detail,
                "price" => $request->price,
                "category_id" => $request->category_id

            ]);

        }

        toast('update ข้อมูลสำเร็จ', 'success');

        return redirect()->route('product.index');

    }

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('product.index');
    }

}
