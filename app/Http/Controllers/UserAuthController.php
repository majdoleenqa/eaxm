<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function showlogin($guard){
        return response()->view('cms.auth.login' , compact('guard'));
     }

     public function login(Request $request){
      $validator = Validator($request->all() ,[
           'email' => 'required|email',
           'password'=> 'required|string|min:6'
      ]);

     //  if(! $validator->fails()){

     //  }
     //  else{
     //     return response()->json([
     //         'icon' => 'error' ,
     //         'title' => $validator->getMessageBag()->first(),
     //     ] , 400);
     //  }

      $credentials =[
         'email' => $request->get('email'),
         'password' =>$request->get('password'),
      ];
      if (! $validator->fails()){
         if (Auth::guard($request->get('guard'))->attempt($credentials)){
             return response()->json([
                 'icon' => 'success' , 'title' =>"Log is Successfully"
             ] , 200);
         }
         else{
             return response()->json([
                 'icon' => 'error' , 'title' => "Log is Faild"
             ] , 400);
         }
      }else{
         return response()->json(['message' => $validator->getMessageBag()->first()] , 400);
      }
     }

     public function logout(Request $request){
         $guard = auth('admin')->check() ? 'admin' : 'author';
         Auth::guard($guard)->logout();
         $request->session()->invalidate();
         return redirect()->route('view.login' , $guard);

     }

     public function changepassword(){

     }

     public function resetpassword(){

     }

     public function editprofile(){

     }

     public function updateprofile(){

     }
}
