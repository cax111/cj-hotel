<?php $__env->startSection('content'); ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Kamar<span class="col-sm-offset-8"><a href="data-kamar/tambah" class="btn btn-primary">Tambah data</a></span></h1>
          <!-- <h2 class="sub-header"></h2> -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID Kamar</th>
                  <th>Nama Jenis Kamar</th>
                  <th>Harga Sewa</th>
                  <th>Maksimal penghuni</th>
                  <th>Deskripsi Kamar</th>
                  <th>Status</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($data->id_kamar); ?></td>
                  <td><?php echo e($data->nama_jenis); ?></td>
                  <td><?php echo e($data->harga_sewa); ?></td>
                  <td><?php echo e($data->banyak_tamu); ?></td>
                  <td><?php echo e($data->deskripsi_kamar); ?></td>
                  <td><?php echo e($data->status); ?></td>
                  <td>
                    <a href="data-kamar/edit/<?php echo e($data->id_kamar); ?>">edit data</a>
                    <a href="data-kamar/hapus/<?php echo e($data->id_kamar); ?>" onclick="return confirm('apakah yakin anda akan menghapus ini ?')">hapus data</a>
                  </td>
                </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <h1 class="page-header">Jenis Kamar<span class="col-sm-offset-8"><a href="data-kamar/tambah-jenis" class="btn btn-primary">Tambah data</a></span></h1>
          <!-- <h2 class="sub-header"></h2> -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID Jenis</th>
                  <th>Nama Jenis Kamar</th>
                  <th>aksi</th>
                </tr>
              </thead>
            <?php $__currentLoopData = $datas2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tbody>
                <tr>
                  <td><?php echo e($data2->id_jenis); ?></td>
                  <td><?php echo e($data2->nama_jenis); ?></td>
                  <td>
                    <a href="data-kamar/edit-jenis/<?php echo e($data2->id_jenis); ?>">edit data</a>
                    <a href="data-kamar/hapus-jenis/<?php echo e($data2->id_jenis); ?>" onclick="return confirm('apakah yakin anda akan menghapus ini ?')">hapus data</a>
                  </td>
                </tr>
              </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          </div>
        </div>
<?php echo $__env->make('master.indexAdmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>