<!DOCTYPE html>
<html>
	<head>
		<title>index</title>
		<link rel="stylesheet" type="text/css" href="assets/css/tambahan.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
						<li><a href="/login">LOGIN</a></li>
						<li><a href="/rooms">ROOMS</a></li>
						<li><a href="/resto">RESTO</a></li>
						<li><a href="/about">ABOUT US</a></li>
					</ul>
				</div>
			</div>
		</div>
		@yield('content')
		<footer class="footer">
		  <div class="container">
		    <div class="row">
			  <div class="col-md-9 col-sm-6 footerleft ">
		        <div class="logo logo-default"> CJ Hotel</div>
		        <p>CJ Hotel adalah sebuah jasa atau layanan penginapan hotel berbintang 4 yang berada di daerah bandung. CJ Hotel telah berdiri sejak tahun 2005 dan konsisten berkontribusi menyediakan layanan penginapan hingga sekarang. </p>
		        <p><i class="fa fa-map-pin"></i> Jalan Bebek no.46, cibiru - Bandung (14045), INDONESIA</p>
		        <p><i class="fa fa-phone"></i> Phone : +62 899 8888 8899</p>
		        <p><i class="fa fa-envelope"></i> E-mail : info@cjhotel.com</p>		        
			  </div>
			  <div class="col-md-3 col-sm-6 paddingtop-bottom right">
			    <h6 class="heading7">GENERAL LINKS</h6>
			    <ul class="footer-ul">
		          <li><a href="#"> Career</a></li>
		          <li><a href="#"> Privacy Policy</a></li>
		          <li><a href="#"> Terms & Conditions</a></li>
		          <li><a href="#"> Client Gateway</a></li>
		          <li><a href="#"> Ranking</a></li>
		          <li><a href="#"> Case Studies</a></li>
		          <li><a href="#"> Frequently Ask Questions</a></li>
		        </ul>
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
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.js"></script>
	</body>
</html>