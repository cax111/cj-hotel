@extends('master.indexAdminCrud')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Kamar</h1>
          <h2 class="sub-header">Edit Data</h2>
	          <div class="form-group col-md-8 col-md-offset-2">
          		<form method="POST" action="{{url ('admin-cj/data-kamar/update',$tampiledit->id_kamar) }}">
          		{!! csrf_field() !!}
				  <label>Pilih Jenis Kamar</label>
				  <select type="text" class="form-control" name="jenis">
				  	@foreach($datas2 as $data)
				  		<option value="{{$data['id_jenis']}}">{{ $data['nama_jenis'] }}</option>
				  	@endforeach
				  </select>
				  <label>Harga Sewa/hari</label>
				  <input type="text" class="form-control" value="{{ $tampiledit->harga_sewa }}" name="hargasewa" required>
				  <label>Maksimal Penghuni</label>
				  <input type="text" class="form-control" name="max" value="{{$tampiledit->banyak_tamu}}" maxlength="1" required>
				  <label>Deskripsi Kamar</label>
				  <input type="text" class="form-control" value="{{ $tampiledit->deskripsi_kamar }}" name="desc" required>
				  <label>Status</label>
				  <input type="text" class="form-control" value="{{ $tampiledit->status }}" name="status" value="tersedia" disabled="disabled">
				  <br/>
				  <input type="submit" class="btn btn-primary" value="Simpan">
				  <a href="/admin-cj/data-kamar" class="btn btn-danger">Kembali</a>	
				</form>
			  </div>
        </div>