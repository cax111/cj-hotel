@extends('master.index')
@section('content')
	<div class="container">	
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h3 class="page-header">Halaman Akun</h3>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h4>Profil Saya</h4>
                <br/>
            	<form method="POST" action="{{ url('/ubah-proses') }}">
                	{!! csrf_field() !!} 
					<div class="row">
						<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
	                        <label>No Identitas</label>
						  	<input type="text" class="form-control" name="noid" value="{{$userData['no_identitas']}}" required>
					  		@if ($errors->has('noid'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('noid') }}</strong>
                                </span>
                            @endif
	                        <label>Nama Lengkap</label>
						  	<input type="text" class="form-control" name="nama_lengkap" value="{{$userData['nama_tamu']}}" required>
					  		@if ($errors->has('nama_lengkap'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('nama_lengkap') }}</strong>
                                </span>
                            @endif
	                        <label>Alamat</label>
						  	<input type="text" class="form-control" name="alamat" value="{{$userData['alamat']}}" required>
					  		@if ($errors->has('alamat'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                            @endif
	                        <label>No Handphone</label>
						  	<input type="text" class="form-control" name="nohp" value="{{$userData['no_tlp']}}" required>
					  		@if ($errors->has('nohp'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('nohp') }}</strong>
                                </span>
                            @endif
                            <label>Tanggal Lahir</label>
							<input type="text" value="{{$userData['tgl_lahir']}}" class="form-control datepicker" name="tgl_lahir" required>	
						  	@if ($errors->has('tgl_lahir'))
		                        <span class="help-block alert-danger">
		                            <strong>{{ $errors->first('tgl_lahir') }}</strong>
		                        </span>
		                    @endif
					  		<br/>
						  	<div class="col-md-offset-10 col-sm-offset-10 col-xs-offset-8">
						  		<input type="hidden" value="{{$userData['id_tamu']}}" name="id_tamu">
						  		<input type="submit" class="btn btn-primary" value="Simpan">
							</div>
							<br/>	
						</div>
					</div>
			</div>
		</div>
	</div>
	<br/>
@endsection