<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authcontroller extends Controller
{
   public  function login(){
       return view('admin.login');
   }

   public function auth_login(Request $request){
    
    $data=['email'=>$request->email , 'password'=>$request->password];
  
    if(Auth::attempt($data)){

      return redirect()->route('index');
    
     }else{
        return redirect()->back()->with('error' , 'invaled email or password');
    }

   }

   public function register()
   {
       return view('admin.register');
   }

   public function at_register(Request $request)
   {
      $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required',
        'password_confirmation'=>'required'
      ]);
      if($request->password == $request->password_confirmation){
      User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)  ,
     
      ]);

      return redirect()->route('login')->with('message' , 'sucssfuley added  ' . $request->name);
    }
    return redirect()->back()->with('error' , 'password not confirm');
      
   }

   public function logout()
   {
       if(Auth::check()){
           Auth::logout();
       }
       return redirect()->route('index');
   }

}
