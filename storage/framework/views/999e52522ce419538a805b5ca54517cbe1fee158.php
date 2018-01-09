	
	<?php $__env->startSection('contents'); ?>
			<br/>
					<?php echo e($request->session()->get('cek')); ?>

					<?php $i=0; ?>
					<?php $__currentLoopData = $datas3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="assets/img/standar.jpg" alt="...">
							<div class="caption">
								<h3><?php echo e($data->nama_jenis); ?> - <?php echo e($data->id_kamar); ?></h3>
								<hr/>
								<div class="col-md-12 col-sm-12 col-xs-12"><h4>Deskripsi Kamar</h4>
									<p><?php echo e($data->deskripsi_kamar); ?></p>
									<hr/>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">masksimal penghuni</div> 
										<div class="col-md-6 col-sm-6 col-xs-12"> <?php echo e($data->banyak_tamu); ?> orang</div>
										<div class="col-md-6 col-sm-6 col-xs-12">Harga/malam</div>
										<div class="col-md-6 col-sm-6 col-xs-12"> Rp.<?php echo number_format($data->harga_sewa, "2", ",", ".");?></div>
									</div>
									<br/>
								</div>
								<form method="POST" action="/isi-data">
									<?php echo e(csrf_field()); ?> 
									<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
									
									<input type="hidden" value="<?php echo e($request->checkin); ?>"  name="checkin">
									<input type="hidden" value="<?php echo e($request->checkout); ?>"  name="checkout">
									<input type="hidden" value="<?php echo e($data->id_kamar); ?>"  name="id">
									<input type="hidden" value="<?php echo e($data->nama_jenis); ?>"  name="nama">
									<input type="hidden" value="<?php echo e($data->deskripsi_kamar); ?>" name="deskripsi">
									<input type="hidden" value="<?php echo e($data->banyak_tamu); ?>" name="banyak">
									<input type="hidden" value="<?php echo e($data->harga_sewa); ?>" name="harga">
									.
									<hr/>
									<p><input type="submit" class="btn btn-primary" value="Pilih Kamar"></p>
								</form>
							</div>
						</div>
					</div>
					<?php $i++; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
					<?php if($i==0): ?>
						<p class="bg-danger" style="padding:20px;"> Kamar hotel yang anda maksud tidak tersedia..</p>
					<?php endif; ?>
			<br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>