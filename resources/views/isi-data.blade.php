	@extends('master.index')
	@section('content')
	<div class="container">	
		<h1 class="page-header">Reservasi</h1>
		<div class="col-md-8 col-sm-12 col-xs-12">
        	<div class="row">  
          		<h2 class="sub-header">Isi Data</h2>
	          	<div class="form-group">
	          		<form method="POST" action="/isi-data-store">
	          			{{ csrf_field() }}
						<meta name="csrf-token" content="{{ csrf_token() }}">
					  	<label>No. Identitas *KTP/SIM/Passport</label>
					  	<input type="text" class="form-control" name="noid" maxlength="16" required>
					  	<label>Nama Depan</label>
					  	<input type="text" class="form-control" name="namaDepan" required>
					  	<label>Nama Belakang</label>
					  	<input type="text" class="form-control" name="namaBelakang" required>
					  	<label>Alamat</label>
					  	<input type="text" class="form-control" name="alamat" maxlength="200" required>
					  	<label>No. Handphone</label>
					  	<input type="text" class="form-control" name="nohp" required>
					  	<label>Email</label>
					  	<input type="text" class="form-control" name="email" required>
					  			@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					  	<br/>
					  	<p>Setelah reservasi pertama anda akan mendapatkan akses login kedalam website kami.</p>
					  	<label>Password</label>
					  	<input type="password" class="form-control" name="pass" required>
					  	<label>Confirm Password</label>
					  	<input type="password" class="form-control" name="confirmpass" required>
					  	<input type="hidden" name="id" value="{{$request->id}}" required>
					  	<input type="hidden" name="banyak" value="{{$request->banyak}}" required>
					  	<input type="hidden" name="nama" value="{{$request->nama}}" required>
					  	<input type="hidden" name="lamanginap" value="{{$jumlah->d}}" required>
					  	<input type="hidden" name="harga" value="{{$request->harga*$jumlah->d+($request->harga*$jumlah->d)*0.1}}" required>
					  	<br/>
					  	<input type="submit" class="btn btn-primary" value="Simpan">
					  	<a href="/" class="btn btn-danger">Kembali</a>	
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<h3 class="page-header">Data Kamar</h3>
			<h4>{{$request->nama}} - {{$request->id}}</h4><hr/>
			<div class="col-md-12 col-sm-12 col-xs-12"><h4>Deskripsi Kamar</h4>
				<p>{{$request->deskripsi}}</p><hr/>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">Masksimal Penghuni</div> 
					<div class="col-md-6 col-sm-6 col-xs-12"> {{$request->banyak}} orang</div>
					<div class="col-md-6 col-sm-6 col-xs-12">Lama Menginap</div> 
					<div class="col-md-6 col-sm-6 col-xs-12"> {{$jumlah->d}} hari</div>
					<div class="col-md-6 col-sm-6 col-xs-12">Harga/malam</div>
					<div class="col-md-6 col-sm-6 col-xs-12"> Rp.<?php echo number_format($request->harga, "2", ",", ".");?></div>
					<div class="col-md-6 col-sm-6 col-xs-12">Pajak Hotel</div>
					<div class="col-md-6 col-sm-6 col-xs-12"> Rp.<?php echo number_format(($request->harga*$jumlah->d)*0.1, "2", ",", ".");?></div>
					<div class="col-md-6 col-sm-6 col-xs-12">Total Harga</div>
					<div class="col-md-6 col-sm-6 col-xs-12"> Rp.<?php echo number_format($request->harga*$jumlah->d+($request->harga*$jumlah->d)*0.1, "2", ",", ".");?></div>
				</div>
			</div>
		</div>
	</div>
	<br/>
@endsection