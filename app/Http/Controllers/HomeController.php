<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = testimonial::select('*')->join('tb_tamu','tb_tamu.id_tamu','=','tb_testimonial.id_tamu')->orderBy('id_testi','DESC')->paginate(7);

        $datas3 = kamar::orderBy('id_kamar','DESC')->first();        
        return view('home')->with('datas',$datas)->with('datas3',$datas3);
    }
}
