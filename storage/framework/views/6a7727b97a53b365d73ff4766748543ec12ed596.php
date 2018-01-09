	
	<?php $__env->startSection('content'); ?>
	<div class="container">	
		<h1 class="page-header">Menuju Reservasi Kamar</h1>
		<div class="col-md-8 col-sm-12 col-xs-12">
        	<div class="row">  
	          	<div class="form-group">
	          	
	          		<form name="myform" method="POST" action="/reservasi-kamar">
	          			<?php echo e(csrf_field()); ?>

						<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
					  	<input type="hidden" name="noid" value="<?php echo e($request->noid); ?>" required>
					  	<input type="hidden" name="namaDepan" value="<?php echo e($request->namaDepan); ?>" required>
					  	<input type="hidden" name="namaBelakang" value="<?php echo e($request->namaBelakang); ?>" required>
					  	<input type="hidden" name="alamat" value="<?php echo e($request->alamat); ?>" required>
					  	<input type="hidden" name="email" value="<?php echo e($request->email); ?>" required>
					  	<input type="hidden" name="nohp" value="<?php echo e($request->nohp); ?>" required>
					  	<input type="hidden" name="harga" value="<?php echo e($request->harga); ?>" required>
					  	<input type="hidden" name="id" value="<?php echo e($request->id); ?>" required>
					  	<input type="hidden" name="banyak" value="<?php echo e($request->banyak); ?>" required>
					  	<input type="hidden" name="nama" value="<?php echo e($request->nama); ?>" required>
					  	<input type="hidden" name="lamanginap" value="<?php echo e($request->lamanginap); ?>" required>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>