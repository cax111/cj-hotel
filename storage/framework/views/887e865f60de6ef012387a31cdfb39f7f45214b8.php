	
	<?php $__env->startSection('content'); ?>
	<div class="container">	
		<h1 class="page-header">Registrasi</h1>
		<div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
        	<div class="row">  
          		<h2 class="sub-header">Isi Data</h2>
                    <?php $s=Session::get('err')?>
                    <?php if(isset($s)): ?>    
                        <div class="alert alert-danger">
                            <strong><?php echo e($s); ?></strong>
                        </div>
                    <?php endif; ?>
	          	<div class="form-group">
	          		<form method="POST" action="/registrasi-proses">
	          			<?php echo e(csrf_field()); ?>

						<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
					  	<label>No. Identitas *KTP/SIM/Passport</label>
					  	<input type="text" class="form-control" name="noid" maxlength="16" required>
					  	<?php if($errors->has('noid')): ?>
	                        <span class="help-block alert-danger">
	                            <strong><?php echo e($errors->first('noid')); ?></strong>
	                        </span>
	                    <?php endif; ?>
					  	<label>Nama Depan</label>
					  	<input type="text" class="form-control" name="namaDepan" required>
					  	<?php if($errors->has('namaDepan')): ?>
	                        <span class="help-block alert-danger">
	                            <strong><?php echo e($errors->first('namaDepan')); ?></strong>
	                        </span>
	                    <?php endif; ?>
					  	<label>Nama Belakang</label>
					  	<input type="text" class="form-control" name="namaBelakang" required>
					  	<?php if($errors->has('namaBelakang')): ?>
	                        <span class="help-block alert-danger">
	                            <strong><?php echo e($errors->first('namaBelakang')); ?></strong>
	                        </span>
	                    <?php endif; ?>
					  	<label>Alamat</label>
					  	<input type="text" class="form-control" name="alamat" maxlength="200" required>
					  	<?php if($errors->has('alamat')): ?>
	                        <span class="help-block alert-danger">
	                            <strong><?php echo e($errors->first('alamat')); ?></strong>
	                        </span>
	                    <?php endif; ?>
					  	<label>Tanggal Lahir</label>
						<input type="text" value="<?php echo date('Y-m-d'); ?>" class="form-control datepicker" name="tgl_lahir" required>	
					  	<?php if($errors->has('tgl_lahir')): ?>
	                        <span class="help-block alert-danger">
	                            <strong><?php echo e($errors->first('tgl_lahir')); ?></strong>
	                        </span>
	                    <?php endif; ?>
					  	<label>No. Handphone</label>
					  	<input type="text" class="form-control" name="nohp" required>
					  	<?php if($errors->has('nohp')): ?>
	                        <span class="help-block alert-danger">
	                            <strong><?php echo e($errors->first('nohp')); ?></strong>
	                        </span>
	                    <?php endif; ?>
					  	<label>Email</label>
					  	<input type="text" class="form-control" name="email" required>
					  			<?php if($errors->has('email')): ?>
                                    <span class="help-block alert-danger">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
					  	<br/>
					  	<label>Password</label>
					  	<input type="password" class="form-control" name="password" required>
					  	<?php if($errors->has('password')): ?>
	                        <span class="help-block alert-danger">
	                            <strong><?php echo e($errors->first('password')); ?></strong>
	                        </span>
	                    <?php endif; ?>
					  	<label>Confirm Password</label>
					  	<input type="password" class="form-control" name="pass_confirmation" required>
					  	<?php if($errors->has('pass_confirmation')): ?>
	                        <span class="help-block alert-danger">
	                            <strong><?php echo e($errors->first('pass_confirmation')); ?></strong>
	                        </span>
	                    <?php endif; ?>
					  	<br/>
					  	<input type="submit" class="btn btn-primary" value="Simpan">
					  	<a href="/" class="btn btn-danger">Kembali</a>	
					</form>
				</div>
			</div>
		</div>
	</div>
	<br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>