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
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Profile</a></li>
            <li><a href="#">logout</a></li>
          </ul> -->
        </div>
      </div>
    </nav>
            
        <div class="container-fluid">
            <h1 class="page-header">Login</h1>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <br/>
                        <form method="POST" action="{{ url('/cek-admin') }}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-12">
                                    <?php $s=Session::get('error')?> 
                                    @isset($s)
                                        <div class="alert alert-danger"> {{$s}}
                                        </div>
                                    @endisset
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username-cj">  
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
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
