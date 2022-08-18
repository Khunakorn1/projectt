<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index (){
        return view('admin.category.index');
    }

    public function createform (){
        return view('admin.category.create');
    }
}
