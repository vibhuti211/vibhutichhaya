<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use DB;


class registercontroller extends Controller
{
    //
    public function register(Request $request)
    {
    	$r = new Register();
    	$r->name= $request->name;
    	$r->email= $request->email;
    	$r->password=$request->password;
    	$r->save();
    	return redirect('login');
    }
    public function dologin(Request $request)
    {
       $email = $request->input('email');
       $password = $request->input('password');
       //$request->session()->put('firstnm', $username);

       $checklogin =Register::select('email','password')->where(['email'=>$email , 'password'=>$password]);

       
      

            if($checklogin)
          {
              return view('productshow');
          }
      }
       

}
