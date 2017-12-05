@extends('master.indexAdminCrud')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Tamu</h1>
          <h2 class="sub-header">Tambah Data</h2>
	          <div class="form-group col-md-8 col-md-offset-2">
          		<form method="POST" action="{{url ('admin-cj/data-tamu/update',$tampiledit->id_tamu) }}">
          		{!! csrf_field() !!}
				  <label>No. Identitas</label>
				  <input type="text" class="form-control" value="{{$tampiledit->no_identitas}}" name="noidentitas">
				  <label>Nama Lengkap</label>
				  <input type="text" class="form-control" value="{{$tampiledit->nama_tamu}}" name="nama">
				  <label>Alamat</label>
				  <input type="text" class="form-control" value="{{$tampiledit->alamat}}" name="alamat">
				  <label>No. HP</label>
				  <input type="text" class="form-control" value="{{$tampiledit->no_tlp}}" name="nohp">
				  <label>email</label>
				  <input type="hidden" class="form-control" value="{{$tampiledit->email}}" name="emaildulu">	
				  <input type="text" class="form-control" value="{{$tampiledit->email}}" disabled="disabled" name="email">	
				  <br/>
				  <input type="submit" class="btn btn-primary" value="Simpan">
				  <a href="/admin-cj/data-tamu" class="btn btn-danger">Kembali</a>	
				</form>
			  </div>
        </div>