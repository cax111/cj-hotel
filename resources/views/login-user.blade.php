<!DOCTYPE html>
<html>
	<head>
		<title>index</title>
		<link rel="stylesheet" type="text/css" href="assets/css/tambahan.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/jquery-ui.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
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
			<h1 class="page-header">Login</h1>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <br/>
                        <form method="POST" action="{{ url('/cek') }}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-12">
                                	<?php $s=Session::get('error')?> 
                                	@isset($s)
	                                	<div class="alert alert-danger"> {{$s}}
	                                	</div>
                                	@endisset
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="username-cj" placeholder="Format : xxx@xxx.xxx">  
	                                @if ($errors->has('username-cj'))
	                                    <span class="help-block alert-danger">
	                                        <strong>{{ $errors->first('username-cj') }}</strong>
	                                    </span>
	                                @endif
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password-cj">
	                                @if ($errors->has('password-cj'))
	                                    <span class="help-block alert-danger">
	                                        <strong>{{ $errors->first('password-cj') }}</strong>
	                                    </span>
	                                @endif
                                    <br/>    
                                    <input type="submit" class="form-control btn btn-primary" name="ok">  
                                    <div class="row">
                                    <br/>
                                    <div class="col-md-offset-6 col-sm-offset-8 col-xs-offset-6">
                                    	<a href="/lupa-password">Lupa Password ? Klik disini</a>
                                    </div>
                                    </div>
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