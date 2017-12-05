<?php $__env->startSection('content'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Kamar</h1>
          <h2 class="sub-header">Tambah Data</h2>
	          <div class="form-group col-md-8 col-md-offset-2">
          		<form method="POST" action="<?php echo e(url ('admin-cj/data-kamar/store-jenis')); ?>">
          		<?php echo csrf_field(); ?>

				  <label>Nama Jenis</label>
				  <input type="text" class="form-control" name="namajenis">
				  <br/>
				  <input type="submit" class="btn btn-primary" value="Simpan">
				  <a href="/admin-cj/data-jenis" class="btn btn-danger">Kembali</a>	
				</form>
			  </div>
        </div>
<?php echo $__env->make('master.indexAdminCrud', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>