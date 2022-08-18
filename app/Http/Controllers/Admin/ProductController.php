<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return view('admin.Product.index');
    }

    public function createform (){
        return view('admin.product.create');
    }
}
