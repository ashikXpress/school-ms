<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function createAdminForm(){

       return view('admin.create_admin');
   }

   public function createAdmin(Request $request){
       $this->validate($request,[
           'first_name'=>'required',
           'last_name'=>'required',
           'email'=>'required|unique:users',
           'mobile_number'=>'required|unique:users',
           'password'=>'required',
           'retype_password'=>'required',
       ]);
       $result=User::create([
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
           'email'=>$request->email,
           'mobile_number'=>$request->mobile_number,
           'password'=>$request->password,
       ]);
       if ($result){
           $request->session()->flash('success','Admin created successfully');
           return redirect()->route('create.admin.form');
       }else{
           $request->session()->flash('success','Admin create failed');
           return redirect()->route('create.admin.form');
       }
   }
}
