<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthsController extends Controller
{
   public function registrasi(){
      return view('registrasi');
   }
   public function postregist(Request $request){
      $request->validate([
         'name'=>'required',
         'nik'=>'required',
         'password'=>'required',
      ]);
      User::create([
         'name'=>$request->name,
         'nik'=>$request->nik,
         'password'=>bcrypt($request->password),
         'role'=>'mahasiswa',
      ]);
      return redirect()->route('login')->with('status','Registrasi Succes');
   }

   public function login(){
      return view('login');
   }
     public function postlogin(Request $request){
      $cek =$request ->validate([
         'nik'=>'required',
         'password'=>'required',
      ]);   
      if(Auth::attempt($cek)){
         $user =Auth::User();
         if($user->role =='admin' ){
            return redirect()->route('laporan')->with('status','Login Succes:'.$user->name);

         }else{
            return redirect()->route('fakultas')->with('status','Welcome To Bina Nusantara:'.$user->name);
         }
   }
   return back()->with('status','nik atau password tidak sesuai');

}
public function logout(){
  Auth::logout();
  return redirect()->route('login');
}
}