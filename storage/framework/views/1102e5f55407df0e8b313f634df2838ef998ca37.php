<?php $__env->startSection('content'); ?>
	<div class="container">	
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h3 class="page-header">Data Reservasi</h3>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h4>Data Customer</h4>
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">No. Identitas</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($request->noid); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Nama Lengkap</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($request->namaDepan); ?> <?php echo e($request->namaBelakang); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Alamat</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($request->alamat); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">No. Handphone</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($request->nohp); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Email</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($request->email); ?></div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
			
			<hr/>
				<h4>Data Kamar</h4>
				<h4>Kamar <?php echo e($request->nama); ?> - <?php echo e($request->id); ?></h4>
				<p><?php echo e($request->deskripsi); ?></p>
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">Masksimal Penghuni</div> 
					<div class="col-md-4 col-sm-6 col-xs-12"> <?php echo e($request->banyak); ?> orang</div>
					<div class="col-md-8 col-sm-6 col-xs-12">Lama Menginap</div> 
					<div class="col-md-4 col-sm-6 col-xs-12"> <?php echo e($request->lamanginap); ?> hari</div>
					<div class="col-md-8 col-sm-6 col-xs-12">Harga/malam</div>
					<div class="col-md-4 col-sm-6 col-xs-12"> Rp.<?php echo number_format($request->harga, "2", ",", ".");?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Pajak Hotel</div>
					<div class="col-md-4 col-sm-6 col-xs-12"> Rp.<?php echo number_format(($request->harga*$request->lamanginap)*0.1, "2", ",", ".");?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Total Harga</div>
					<div class="col-md-4 col-sm-6 col-xs-12"> Rp.<?php echo number_format($request->harga*$request->lamanginap+($request->harga*$request->lamanginap)*0.1, "2", ",", ".");?></div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
			
			<hr/>
				<blockquote class="success text-center">
					<h4>Silakan bayar dengan jumlah harga dibawah ini : </h4>
					<h4>
						<b>Rp.<?php echo number_format(($request->harga*$request->lamanginap+($request->harga*$request->lamanginap)*0.1)+rand(0,999), "2", ",", ".");?></b>
					</h4>
					<p>*penambahan angka akhir, untuk memudahkan pencarian transaksi bank.</p>
					<div class="row">
						<div class="col-md-4">
							<p>Bank BRI</p>
							<p>30129381293812948</p>
							<p>A.N. CJ Hotel</p>
						</div>
						<div class="col-md-4">
							<p>Bank Mandiri</p>
							<p>30129381293812948</p>
							<p>A.N. CJ Hotel</p>
						</div>
						<div class="col-md-4">
							<p>Bank BRI</p>
							<p>30129381293812948</p>
							<p>A.N. CJ Hotel</p>
						</div>
					</div>
				</blockquote>
			</div>
		</div>
	</div>
	<br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>