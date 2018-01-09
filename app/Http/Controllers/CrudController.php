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
        $datas = tamu::orderBy('id_tamu','DESC')->paginate(14);
       // $sesi = $request->session()->put('id-tamu',$datas['id_tamu']);
        return view('data-tamu')->with('datas',$datas);
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

         $datas2 = tamu::orderBy('id_tamu','DESC')->first();
         $tambah = new tamu();
         $tambah->id_tamu = $datas2['id_tamu']+1;
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
        $tampiledit = tamu::where('id_tamu', $id)->first();
        return view('edit-data-tamu')->with('tampiledit',$tampiledit);
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
        $update = tamu::where('id_tamu', $id)->first();
        $update->no_identitas = $request['noidentitas'];
        $update->nama_tamu = $request['nama'];
        $update->alamat = $request['alamat'];
        $update->no_tlp = $request['nohp'];
        $update->update();

        return redirect()->to('/admin-cj/data-tamu');
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
