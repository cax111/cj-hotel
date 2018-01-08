	@extends('home')
	@section('contents')
			<br/>
					{{$request->session()->get('cek')}}
					<?php $i=0; ?>
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
								<form method="POST" action="/isi-data">
									{{ csrf_field() }} 
									<meta name="csrf-token" content="{{ csrf_token() }}">
									
									<input type="hidden" value="{{$request->checkin}}"  name="checkin">
									<input type="hidden" value="{{$request->checkout}}"  name="checkout">
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
					<?php $i++; ?>
					@endforeach
					
					@if($i==0)
						<p class="bg-danger" style="padding:20px;"> Kamar hotel yang anda maksud tidak tersedia..</p>
					@endif
			<br/>
@endsection