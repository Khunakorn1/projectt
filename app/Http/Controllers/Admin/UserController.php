<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index (){
       $user = User::all();
        return view('admin.user.index',compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.editform',compact('user'));
    }

    public function update(Request $request ,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('user.index');
    }

    public function delete($id){
        $user = User::find($id);
        $user::destroy($id);
        return redirect()->route('user.index');
    }

}   
