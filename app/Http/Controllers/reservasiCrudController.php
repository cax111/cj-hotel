<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\reservasi;
class reservasiCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {   
        $datas = reservasi::select('*')->join('tb_booking','tb_booking_kamar.kode_booking','=','tb_booking.kode_booking')->orderBy('id_booking_kamar','DESC')->paginate(14);
        return view('data-reservasi')->with('datas',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas2 = jenisKamar::orderBy('id_jenis','DESC')->get();
        return view('tambah-data-kamar')->with('datas2',$datas2);
    }
    public function createJenis()
    {
        return view('tambah-jenis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $datas2 = kamar::orderBy('id_kamar','DESC')->first();
         $tambah = new kamar();
         $tambah->id_kamar = $datas2['id_kamar']+1;
         $tambah->id_jenis = $request['jenis'];
         $tambah->harga_sewa = $request['hargasewa'];
         $tambah->banyak_tamu = $request['max'];
         $tambah->deskripsi_kamar = $request['desc'];
         $tambah->status = "tersedia";
         $tambah->save();

     return redirect()->to('/admin-cj/data-kamar');
    }
    public function storeJenis(Request $request)
    {
        
        /*$this->validate($request, [
           'jenis' => 'required',
           'hargasewa' => 'required',
           'desc' => 'required',
           'status' => 'required'
        ]);*/
        
         $datas2 = jenisKamar::orderBy('id_jenis','DESC')->first();
         $tambah = new jenisKamar();
         $tambah->id_jenis = $datas2['id_jenis']+1;
         $tambah->nama_jenis = $request['namajenis'];
         $tambah->save();

     return redirect()->to('/admin-cj/data-kamar');
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
        $datas2 = jenisKamar::orderBy('id_jenis','DESC')->get();
        $tampiledit = kamar::where('id_kamar', $id)->first();
        return view('edit-data-kamar')->with('tampiledit',$tampiledit)->with('datas2',$datas2);
    }
    public function editJenis($id)
    {
        $tampiledit = jenisKamar::where('id_jenis', $id)->first();
        return view('edit-jenis')->with('tampiledit',$tampiledit);
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
        $update = kamar::where('id_kamar', $id)->first();
        $update->harga_sewa = $request['hargasewa'];
        $update->banyak_tamu = $request['max'];
        $update->deskripsi_kamar = $request['desc'];
        $update->status = "tersedia";
        $update->update();

        return redirect()->to('/admin-cj/data-kamar');
    }

    public function updateJenis(Request $request, $id)
    {
        $update = jenisKamar::where('id_jenis', $id)->first();
        $update->nama_jenis = $request['namajenis'];
        $update->update();

        return redirect()->to('/admin-cj/data-kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $hapus = kamar::find($id);
        $hapus->delete();

        return redirect()->to('/admin-cj/data-kamar');
    }
    public function destroyJenis($id)
    { 
        $hapus = jenisKamar::find($id);
        $hapus->delete();

        return redirect()->to('/admin-cj/data-kamar');
    }
}
