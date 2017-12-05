<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\akun;

class appController extends Controller
{
    public function index()
   {
       return view('home');
   }
   public function rooms()
   {
       return view('rooms');
   }
   public function resto()
   {
       return view('resto');
   }
   public function about()
   {
       return view('about');
   }
   public function indexAdmin(request $request)
   {
      /*$sesi = $request->session()->get('email');
      if(empty($sesi)){
        return redirect()->to('/admin-cj/login');
      }*/
      return view('dashboard');
   }
   public function login()
   {
       return view('login');
   }
   public function cek(request $request)
   {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    $sesi = $request->session()->put('email');
    $login  = akun::where('email','=','$request[email]')->get();
    echo $login;

    return redirect()->to('/w');
   }
}
