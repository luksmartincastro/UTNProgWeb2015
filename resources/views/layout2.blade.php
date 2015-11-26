<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="cromados">
    <meta name="author" content="nortuc">
    <link rel="icon" href="#" class="glyphicon glyphicon-th">

    <title>AdminSEL - Servicio tecnico</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Dashboard Template for Bootstrap_files/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js"></script><style type="text/css"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>AdminSEL</b> - Servicio Tecnico Multimarca</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
              <li><a href="/auth/login">Login</a></li>
              <li><a href="/auth/register">Register</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/auth/logout">Logout</a></li>
                </ul>
              </li>
            @endif
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          @yield('menu')          

        </div>
         <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
         <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
         <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <div class="row">
            <div class="col-xs-8 col-sm-8 placeholder"><!-- ////////////////////COLUMNA CLIENTE/////////////////////// -->

               @yield('content')

            </div><!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="col-xs-4 col-sm-4 placeholder"><!-- ////////////////////COLUMNA USUARIO/////////////////////// -->

              @yield('panelUsuario')

            </div><!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->            
          </div>
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Dashboard Template for Bootstrap_files/jquery.min.js"></script>
    <script src="Dashboard Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="Dashboard Template for Bootstrap_files/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>