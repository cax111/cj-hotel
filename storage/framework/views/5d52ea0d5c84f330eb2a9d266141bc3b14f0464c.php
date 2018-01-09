<!DOCTYPE html>
<html>
	<head>
		<title>index</title>
		<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/')); ?>/tambahan.css">
		<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/')); ?>/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/')); ?>/jquery-ui.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="<?php echo e(URL::asset('assets/')); ?>/js/jquery.js"></script>
		<script src="<?php echo e(URL::asset('assets/')); ?>/js/jquery-ui.min.js"></script>
		<script src="<?php echo e(URL::asset('assets/')); ?>/js/bootstrap.js"></script>
		<script>
		  $(function() {
		    $( ".datepicker" ).datepicker();
		  });
		</script>
	</head>
	<body>
		<div class="navbar navbar-default">
			<div class="atas container-fluid">        
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
	      		  <a class="navbar-brand" href="/">CJ Hotel Group</a>
	      		</div>
	      		<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/login-user">LOGIN</a></li>
						<li><a href="/registrasi">REGISTER</a></li>
						<li><a href="/rooms">ROOMS</a></li>
						<li><a href="/resto">RESTO</a></li>
						<li><a href="/about">ABOUT US</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<h1 class="page-header">Lupa Password</h1>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <br/>
                        <form method="POST" action="<?php echo e(url('/lupa-ganti-proses')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-md-12">
                                	<?php $s=Session::get('error')?> 
                                	<?php if(isset($s)): ?>
	                                	<div class="alert alert-danger"> <?php echo e($s); ?>

	                                	</div>
                                	<?php endif; ?>
                                    <label>Password Baru</label>
                                    <input type="password" class="form-control" name="passbaru">  
	                                <?php if($errors->has('passbaru')): ?>
	                                    <span class="help-block alert-danger">
	                                        <strong><?php echo e($errors->first('passbaru')); ?></strong>
	                                    </span>
	                                <?php endif; ?>
                                    <label>Password Baru Konfirmasi</label>
                                    <input type="password" class="form-control" name="passbaruConfirm">  
	                                <?php if($errors->has('passbaruConfirm')): ?>
	                                    <span class="help-block alert-danger">
	                                        <strong><?php echo e($errors->first('passbaruConfirm')); ?></strong>
	                                    </span>
	                                <?php endif; ?>
                                    <br/>   
                                    <input type="hidden" class="form-control" value="<?php echo e($request['token_get']); ?>" name="token"> 
                                    <input type="submit" class="form-control btn btn-primary" name="ok">  
                                </div>
                            </div>
                        </form>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
		<footer class="footer">
		  <div class="container">
		    <div class="row">
			  <div class="col-md-9 col-sm-6 footerleft ">
		        <div class="logo logo-default"> CJ Hotel</div>
		        <p>CJ Hotel adalah sebuah jasa atau layanan penginapan hotel yang berada di daerah bandung. CJ Hotel telah berdiri sejak tahun 2005 dan konsisten berkontribusi menyediakan layanan penginapan hingga sekarang. </p>
		        <p><i class="fa fa-map-pin"></i> Jalan Bebek no.46, cibiru - Bandung (14045), INDONESIA</p>
		        <p><i class="fa fa-phone"></i> Phone : +62 899 8888 8899</p>
		        <p><i class="fa fa-envelope"></i> E-mail : info@cjhotel.com</p>	
			  </div>
		    </div>
		  </div>
		</footer>
		<!--footer start from here-->
		<div class="copyright">
		  <div class="container">
		    <div class="col-md-6">
		      <p>© 2017 - All Rights with CJ Hotel Group</p>
		    </div>
		  </div>
		</div>
	</body>
</html>