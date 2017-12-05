@extends('master.indexAdminCrud')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Kamar</h1>
          <h2 class="sub-header">Edit Data</h2>
	          <div class="form-group col-md-8 col-md-offset-2">
          		<form method="POST" action="{{url ('admin-cj/data-kamar/update-jenis',$tampiledit->id_jenis) }}">
          		{!! csrf_field() !!}
				  <label>Nama Jenis</label>
				  <input type="text" class="form-control" name="namajenis" value="{{ $tampiledit->nama_jenis }}">
				  <br/>
				  <input type="submit" class="btn btn-primary" value="Simpan">
				  <a href="/admin-cj/data-kamar" class="btn btn-danger">Kembali</a>	
				</form>
			  </div>
        </div>