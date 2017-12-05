<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tamu;
use App\akun;
class tamuCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(request $request)
    {
        $datas = kamar::orderBy('id_kamar','DESC')->paginate(14);
        $sesi = $request->session()->put('id-kamar',$datas['id_kamar']);
        return view('data-kamar')->with('datas',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*$this->validate($request, [
           'no_identitas' => 'required',
           'nama_tamu' => 'required',
           'alamat' => 'required',
           'no_tlp' => 'required',
           'email' => 'required',
           'username' => 'required'
        ]);
*/      
         $tambah = new akun();
         $tambah->email = $request['email'];
         $tambah->save();
         $tambah = new tamu();
         $tambah->id_tamu = $sesi+1;
         $tambah->no_identitas = $request['noidentitas'];
         $tambah->nama_tamu = $request['nama'];
         $tambah->alamat = $request['alamat'];
         $tambah->no_tlp = $request['nohp'];
         $tambah->email = $request['email'];
         $tambah->save();

     return redirect()->to('/admin-cj/data-tamu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $hapus = tamu::find($id);
        $hapus->delete();

        return redirect()->to('/admin-cj/data-tamu');
    }
}
