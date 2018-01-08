	@extends('master.index')
	@section('content')
	<div class="container">	
		<h1 class="page-header">Menuju Reservasi Kamar</h1>
		<div class="col-md-8 col-sm-12 col-xs-12">
        	<div class="row">  
	          	<div class="form-group">
	          	
	          		<form name="myform" method="POST" action="/reservasi-kamar">
	          			{{ csrf_field() }}
						<meta name="csrf-token" content="{{ csrf_token() }}">
					  	<input type="hidden" name="noid" value="{{$request->noid}}" required>
					  	<input type="hidden" name="namaDepan" value="{{$request->namaDepan}}" required>
					  	<input type="hidden" name="namaBelakang" value="{{$request->namaBelakang}}" required>
					  	<input type="hidden" name="alamat" value="{{$request->alamat}}" required>
					  	<input type="hidden" name="email" value="{{$request->email}}" required>
					  	<input type="hidden" name="nohp" value="{{$request->nohp}}" required>
					  	<input type="hidden" name="harga" value="{{$request->harga}}" required>
					  	<input type="hidden" name="id" value="{{$request->id}}" required>
					  	<input type="hidden" name="banyak" value="{{$request->banyak}}" required>
					  	<input type="hidden" name="nama" value="{{$request->nama}}" required>
					  	<input type="hidden" name="lamanginap" value="{{$request->lamanginap}}" required>
					  	<br/>
					</form>
				</div>
			</div>
			<script>
				setTimeout(function() {
				document.myform.submit();
				}, 0);
			</script>
		</div>
	</div>
	<br/>
@endsection