<?php $__env->startSection('content'); ?>
	<div class="container">	
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h3 class="page-header">Halaman Akun</h3>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h4>Profil Saya</h4>
                <br/>
            	<form method="POST" action="<?php echo e(url('/ubah-proses')); ?>">
                	<?php echo csrf_field(); ?> 
					<div class="row">
						<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
	                        <label>No Identitas</label>
						  	<input type="text" class="form-control" name="noid" value="<?php echo e($userData['no_identitas']); ?>" required>
					  		<?php if($errors->has('noid')): ?>
                                <span class="help-block alert-danger">
                                    <strong><?php echo e($errors->first('noid')); ?></strong>
                                </span>
                            <?php endif; ?>
	                        <label>Nama Lengkap</label>
						  	<input type="text" class="form-control" name="nama_lengkap" value="<?php echo e($userData['nama_tamu']); ?>" required>
					  		<?php if($errors->has('nama_lengkap')): ?>
                                <span class="help-block alert-danger">
                                    <strong><?php echo e($errors->first('nama_lengkap')); ?></strong>
                                </span>
                            <?php endif; ?>
	                        <label>Alamat</label>
						  	<input type="text" class="form-control" name="alamat" value="<?php echo e($userData['alamat']); ?>" required>
					  		<?php if($errors->has('alamat')): ?>
                                <span class="help-block alert-danger">
                                    <strong><?php echo e($errors->first('alamat')); ?></strong>
                                </span>
                            <?php endif; ?>
	                        <label>No Handphone</label>
						  	<input type="text" class="form-control" name="nohp" value="<?php echo e($userData['no_tlp']); ?>" required>
					  		<?php if($errors->has('nohp')): ?>
                                <span class="help-block alert-danger">
                                    <strong><?php echo e($errors->first('nohp')); ?></strong>
                                </span>
                            <?php endif; ?>
                            <label>Tanggal Lahir</label>
							<input type="text" value="<?php echo e($userData['tgl_lahir']); ?>" class="form-control datepicker" name="tgl_lahir" required>	
						  	<?php if($errors->has('tgl_lahir')): ?>
		                        <span class="help-block alert-danger">
		                            <strong><?php echo e($errors->first('tgl_lahir')); ?></strong>
		                        </span>
		                    <?php endif; ?>
					  		<br/>
						  	<div class="col-md-offset-10 col-sm-offset-10 col-xs-offset-8">
						  		<input type="hidden" value="<?php echo e($userData['id_tamu']); ?>" name="id_tamu">
						  		<input type="submit" class="btn btn-primary" value="Simpan">
							</div>
							<br/>	
						</div>
					</div>
			</div>
		</div>
	</div>
	<br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>