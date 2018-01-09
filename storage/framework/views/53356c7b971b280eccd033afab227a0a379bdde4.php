<?php $__env->startSection('content'); ?>
	<div class="container">	
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h3 class="page-header">Halaman Akun</h3>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h4>Data Customer</h4>
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">No. Identitas</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($userData['no_identitas']); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Nama Lengkap</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($userData['nama_tamu']); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Alamat</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($userData['alamat']); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">No. Handphone</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($userData['no_tlp']); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Email</div>
					<div class="col-md-4 col-sm-6 col-xs-12"><?php echo e($userData['email']); ?></div>
					<div class="col-md-8 col-sm-6 col-xs-12">Usia</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<?php 
							$bday = new DateTime($userData['tgl_lahir']);
							$today = new DateTime();
							$diff = $today->diff($bday);
							echo $diff->y." tahun";
						?>
					</div>
					<div class="col-md-offset-8 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
						<br/>
						<a class="btn btn-warning" href="ubah-data">ubah data</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h3 class="page-header">Histori Transaksi</h3>
			<div class="table-responsive">
	            <table class="table">
	              <thead>
	                <tr>
	                  <th>Id Booking</th>
	                  <th>Nama Kamar</th>
	                  <th>Nama Lengkap</th>
	                  <th>Tanggal Booking</th>
	                  <th>Tanggal checkin</th>
	                  <th>Tanggal checkout</th>
	                  <th>Email</th>
	                  <th>aksi</th>
	                </tr>
	              </thead>
	            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	              <tbody>
	                <tr>
	                  <td><?php echo e($data->id_booking_kamar); ?></td>
	                  <td><?php echo e($data->nama_jenis.' '.$data->id_kamar); ?></td>
	                  <td><?php echo e($data->nama_tamu); ?></td>
	                  <td><?php echo e($data->tgl_booking); ?></td>
	                  <td><?php echo e($data->tgl_checkin); ?></td>
	                  <td><?php echo e($data->tgl_checkout); ?></td>
	                  <td><?php echo e($data->email); ?></td>
	                  <td>
	                    <a href="detailTransaksi/<?php echo e($data->id_booking_kamar); ?>">Lihat Detail Transaksi</a>
	                  </td>
	                </tr>
	              </tbody>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </table>
	        </div>
		</div>
	</div>
	<br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>