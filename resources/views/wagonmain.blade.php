<!DOCTYPE html>
<html lang="en">
  <head>

    <!--Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Taitech - Wagon</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/custom/wagon-style.css') }}">

  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Wagon MSLMS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Admin</a></li>
            <li><a href="#">Queries</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Utilities</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="animated fadeIn"><a href="#">Welcome, Nards</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <br>

    @yield('content')

    <!--Scripts-->
    <script src="{{ asset('/js/jquery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap/bootstrap.min.js') }}"></script>

    <!--Ajax-->
    
  </body>
</html>
