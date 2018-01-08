	
	<?php $__env->startSection('content'); ?>

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
							<?php echo e(csrf_field()); ?> 
							<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
            								<?php $__currentLoopData = $datas2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($data->id_jenis); ?>"><?php echo e($data->nama_jenis); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
				<?php echo $__env->yieldContent('contents'); ?>
				<?php if($request->banyak==""): ?>  
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
								<form method="POST" action="/cek-kamar">
									<?php echo e(csrf_field()); ?> 
									<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
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
						<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($i==0): ?>
								<div class="item active">
							<?php else: ?>
								<div class="item">
							<?php endif; ?>
									<blockquote>
										<p><?php echo e($data->isi_testi); ?></p>
			  							<footer><?php echo e($data->nama_tamu); ?> pada <cite title="Source Title"><?php $pecah=explode("-",$data->tanggal_isi); echo $pecah[2]."-".$pecah[1]."-".$pecah[0]; ?></cite></footer>
									</blockquote>
								</div>
								
								<?php $i++; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php if($i==0): ?>
							<div class="item active">
							<blockquote>
								<p>Data testimonial belum terisi.</p>
		  						<footer>Admin pada <cite title="Source Title"><?php echo date('d-m-Y'); ?></cite></footer>
							</blockquote>
							</div>
						<?php endif; ?>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>