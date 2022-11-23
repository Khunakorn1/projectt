<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\Console\Command\DompCompletionCommand;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::Paginate(4);
        return view('admin.category.index',compact('category'));
    }

    public function createform(){
        return view('admin.category.create');
        
    }

    public function insert(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('category.index');
    }

    public function edit($category_id){
        $category = Category::find($category_id);
        return view('admin.category.editform',compact('category'));
    }

    public function update(Request $request, $category_id){
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->update();
        toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('category.index');
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('category.index');
    }
}
