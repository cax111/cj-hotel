	@extends('master.index')
	@section('content')
	<div class="container">	
		<h1 class="page-header">Registrasi</h1>
		<div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
        	<div class="row">  
          		<h2 class="sub-header">Isi Data</h2>
                    <?php $s=Session::get('err')?>
                    @isset($s)    
                        <div class="alert alert-danger">
                            <strong>{{ $s }}</strong>
                        </div>
                    @endisset
	          	<div class="form-group">
	          		<form method="POST" action="/registrasi-proses">
	          			{{ csrf_field() }}
						<meta name="csrf-token" content="{{ csrf_token() }}">
					  	<label>No. Identitas *KTP/SIM/Passport</label>
					  	<input type="text" class="form-control" name="noid" maxlength="16" required>
					  	@if ($errors->has('noid'))
	                        <span class="help-block alert-danger">
	                            <strong>{{ $errors->first('noid') }}</strong>
	                        </span>
	                    @endif
					  	<label>Nama Depan</label>
					  	<input type="text" class="form-control" name="namaDepan" required>
					  	@if ($errors->has('namaDepan'))
	                        <span class="help-block alert-danger">
	                            <strong>{{ $errors->first('namaDepan') }}</strong>
	                        </span>
	                    @endif
					  	<label>Nama Belakang</label>
					  	<input type="text" class="form-control" name="namaBelakang" required>
					  	@if ($errors->has('namaBelakang'))
	                        <span class="help-block alert-danger">
	                            <strong>{{ $errors->first('namaBelakang') }}</strong>
	                        </span>
	                    @endif
					  	<label>Alamat</label>
					  	<input type="text" class="form-control" name="alamat" maxlength="200" required>
					  	@if ($errors->has('alamat'))
	                        <span class="help-block alert-danger">
	                            <strong>{{ $errors->first('alamat') }}</strong>
	                        </span>
	                    @endif
					  	<label>Tanggal Lahir</label>
						<input type="text" value="<?php echo date('Y-m-d'); ?>" class="form-control datepicker" name="tgl_lahir" required>	
					  	@if ($errors->has('tgl_lahir'))
	                        <span class="help-block alert-danger">
	                            <strong>{{ $errors->first('tgl_lahir') }}</strong>
	                        </span>
	                    @endif
					  	<label>No. Handphone</label>
					  	<input type="text" class="form-control" name="nohp" required>
					  	@if ($errors->has('nohp'))
	                        <span class="help-block alert-danger">
	                            <strong>{{ $errors->first('nohp') }}</strong>
	                        </span>
	                    @endif
					  	<label>Email</label>
					  	<input type="text" class="form-control" name="email" required>
					  			@if ($errors->has('email'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					  	<br/>
					  	<label>Password</label>
					  	<input type="password" class="form-control" name="password" required>
					  	@if ($errors->has('password'))
	                        <span class="help-block alert-danger">
	                            <strong>{{ $errors->first('password') }}</strong>
	                        </span>
	                    @endif
					  	<label>Confirm Password</label>
					  	<input type="password" class="form-control" name="pass_confirmation" required>
					  	@if ($errors->has('pass_confirmation'))
	                        <span class="help-block alert-danger">
	                            <strong>{{ $errors->first('pass_confirmation') }}</strong>
	                        </span>
	                    @endif
					  	<br/>
					  	<input type="submit" class="btn btn-primary" value="Simpan">
					  	<a href="/" class="btn btn-danger">Kembali</a>	
					</form>
				</div>
			</div>
		</div>
	</div>
	<br/>
@endsection