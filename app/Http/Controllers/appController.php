<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
   public function indexAdmin()
   {
       return view('dashboard');
   }
   /*public function dataTamu()
   {
       return view('data-tamu');
   }*/
}
