<?php $__env->startSection('content'); ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Tamu<span class="col-sm-offset-8"><a href="data-tamu/tambah" class="btn btn-primary">Tambah data</a></span></h1>
          <!-- <h2 class="sub-header"></h2> -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Id Tamu</th>
                  <th>No. Identitas</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat</th>
                  <th>No. HP</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>aksi</th>
                </tr>
              </thead>
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tbody>
                <tr>
                  <td><?php echo e($data->id_tamu); ?></td>
                  <td><?php echo e($data->no_identitas); ?></td>
                  <td><?php echo e($data->nama_tamu); ?></td>
                  <td><?php echo e($data->alamat); ?></td>
                  <td><?php echo e($data->no_tlp); ?></td>
                  <td><?php echo e($data->email); ?></td>
                  <td><?php if(!empty($data->username)): ?>
                      <?php echo e($data->username); ?>

                      <?php else: ?>
                      Belum Daftar
                      <?php endif; ?>
                  </td>
                  <td>
                    <a href="data-tamu/edit/<?php echo e($data->id_tamu); ?>">edit data</a>
                    <a href="data-tamu/hapus/<?php echo e($data->id_tamu); ?>" onclick="return confirm('apakah yakin anda akan menghapus ini ?')">hapus data</a>
                  </td>
                </tr>
              </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          </div>
        </div>
<?php echo $__env->make('master.indexAdmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>