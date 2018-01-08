	@extends('master.index')
	@section('content')

			<div class="container-fluid">
				<div class="row">
				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="assets/img/receptionist.jpg" alt="img 1">
				      <div class="carousel-caption">
				        <h3>Welcome To CJ Hotel's Web</h3>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="fullwidth-box biru">
				<div class="container">
					<div class="row ataslega">
						<div class="col-md-12 col-xs-12">
							<div class="logo logo-inverse"><span class="glyphicon glyphicon-search"></span> Cari Kamar</div>
							<form method="POST" action="/pilih-hotel">
							{{ csrf_field() }} 
							<meta name="csrf-token" content="{{ csrf_token() }}">
							<?php date_default_timezone_set('Asia/Jakarta'); ?>
								<div class="row">
									<div class="col-md-3">
										<span class="glyphicon glyphicon-calendar"></span> <label>check in</label>
										<input type="text" value="<?php echo $tgl1=date('Y-m-d'); ?>" class="form-control datepicker" name="checkin" required>
									</div>
									<div class="col-md-3">
										<span class="glyphicon glyphicon-calendar"></span> <label>check out</label>
										<input type="text" value="<?php echo date('Y-m-d', strtotime('+1 days', strtotime($tgl1))); ?>" class="form-control datepicker" name="checkout" required>
									</div>
									<div class="col-md-3">
										<span class="glyphicon glyphicon-user"></span> <label>Banyak Orang/kamar</label> 
										<select class="form-control" name="banyak" required> 
											<option selected="selected" disabled="disabled" value="">(remaja/dewasa)</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>	
									</div>
									<div class="col-md-3">
										<span class="glyphicon glyphicon-home"></span> <label>Pilih Jenis Kamar</label>
										<select class="form-control" name="kamar" required>
											<option selected="selected" value="" disabled="disabled">Pilih Kamar</option>
											<option value="">Semua Kamar</option>
            								@foreach($datas2 as $data)
											<option value="{{$data->id_jenis}}">{{$data->nama_jenis}}</option>
											@endforeach
										</select>	
									</div>
								</div>	
								<div class="row">
									<div class="col-md-12">
										<br/>
									</div>
									<div class="col-md-2">
										<input type="submit" class="form-control btn btn-primary" name="ok" value="Lanjut">	
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<br/>
		<div class="container-fluid">
			<div class="container bgcolor">
				<div class="row">
				<div class="logo logo-inverse">Kamar Pilihan yang Tersedia</div><hr/>
				@yield('contents')
				@if($request->banyak=="")  
				  @foreach($datas3 as $data)
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="assets/img/standar.jpg" alt="...">
							<div class="caption">
								<h3>{{$data->nama_jenis}} - {{$data->id_kamar}}</h3>
								<hr/>
								<div class="col-md-12 col-sm-12 col-xs-12"><h4>Deskripsi Kamar</h4>
									<p>{{$data->deskripsi_kamar}}</p>
									<hr/>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">masksimal penghuni</div> 
										<div class="col-md-6 col-sm-6 col-xs-12"> {{$data->banyak_tamu}} orang</div>
										<div class="col-md-6 col-sm-6 col-xs-12">Harga/malam</div>
										<div class="col-md-6 col-sm-6 col-xs-12"> Rp.<?php echo number_format($data->harga_sewa, "2", ",", ".");?></div>
									</div>
									<br/>
								</div>
								<form method="POST" action="/cek-kamar">
									{{ csrf_field() }} 
									<meta name="csrf-token" content="{{ csrf_token() }}">
									<div class="col-md-12">
									<div class="col-md-12">
										<label>check in</label>
										<input type="text" value="<?php echo $tgl1=date('Y-m-d'); ?>" class="form-control datepicker" name="checkin" required>
									</div>
									<div class="col-md-12">
										<label>check out</label>
										<input type="text" value="<?php echo date('Y-m-d', strtotime('+1 days', strtotime($tgl1))); ?>" class="form-control datepicker" name="checkout" required>
									</div>
									<div class="col-md-12">
										<label>Banyak Orang/kamar</label> 
										<select class="form-control" name="banyak" required> 
											<option selected="selected" disabled="disabled" value="">(remaja/dewasa)</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>	
									</div>
								  	</div>
									<input type="hidden" value="{{$data->id_kamar}}"  name="id">
									<input type="hidden" value="{{$data->nama_jenis}}"  name="nama">
									<input type="hidden" value="{{$data->deskripsi_kamar}}" name="deskripsi">
									<input type="hidden" value="{{$data->banyak_tamu}}" name="banyak">
									<input type="hidden" value="{{$data->harga_sewa}}" name="harga">
									.
									<hr/>
									<p><input type="submit" class="btn btn-primary" value="Pilih Kamar"></p>
								</form>
							</div>
						</div>
					</div>
					@endforeach
				@endif
				</div>
			</div>
		</div>
		<div class="fullwidth-box biru">
			<div class="container">
				<div class="row ataslega">
					<div class="col-md-12 col-xs-12">
						<div class="logo logo-inverse">Testimonial</div>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">	            			
						
  						<div class="carousel-inner" role="listbox">
							<?php $i=0; ?>
						@foreach($datas as $data)
							@if($i==0)
								<div class="item active">
							@else
								<div class="item">
							@endif
									<blockquote>
										<p>{{$data->isi_testi}}</p>
			  							<footer>{{$data->nama_tamu}} pada <cite title="Source Title"><?php $pecah=explode("-",$data->tanggal_isi); echo $pecah[2]."-".$pecah[1]."-".$pecah[0]; ?></cite></footer>
									</blockquote>
								</div>
								
								<?php $i++; ?>
						@endforeach
						@if($i==0)
							<div class="item active">
							<blockquote>
								<p>Data testimonial belum terisi.</p>
		  						<footer>Admin pada <cite title="Source Title"><?php echo date('d-m-Y'); ?></cite></footer>
							</blockquote>
							</div>
						@endif
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection