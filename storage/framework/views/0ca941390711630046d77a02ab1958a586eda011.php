<?php $__env->startSection('content'); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
           <div class="jumbotron">
            <div class="container">
              <h1>Hello, world!</h1>
              <p>Halaman Awal</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
           </div>
        </div>
<?php echo $__env->make('master.indexAdmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>