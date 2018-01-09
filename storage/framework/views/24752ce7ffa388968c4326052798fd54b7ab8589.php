<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css" >
    <link rel="stylesheet" type="text/css" href="../assets/css/tambahan.css" >
    <!-- <link rel="icon" href="../../favicon.ico"> -->
    <title>Halaman Admin</title>
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="atas container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/admin-cj">Admin CJ Hotel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout">LOGOUT</a></li>
            <li><a href="/rooms">ROOMS</a></li>
            <li><a href="/resto">RESTO</a></li>
            <li><a href="/about">ABOUT US</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class=" col-sm-3 col-md-2 sidebar">
          <div class="placeholder">
              <img src="../assets/img/standar.jpg" class="img-responsive">
              <h4 class="colorname">Lorem Ipsum</h4>
              <span class="colorname">Admin</span>
          </div>
          <hr/>
          <ul class="nav nav-sidebar">
            <li><a href="/admin-cj/data-tamu">Data Tamu</a></li>
            <li><a href="/admin-cj/data-kamar">Data Kamar</a></li>
            <li><a href="/admin-cj/data-reservasi">Data Reservasi</a></li>
          </ul>
        </div>
          <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
