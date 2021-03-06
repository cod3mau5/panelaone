<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    A One Cabo Deluxe Transportation | Reservaciones
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/vendor/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="/css/fullcalendar.min.css">
  <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="/css/easy-autocomplete.min.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="/js/ui/trumbowyg.min.css">
  <link rel="stylesheet" href="/css/main.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
          <img src="/img/logo_mini.png" class="img-responsive" style="padding: 8px;">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="./img/top.png" alt=""><b>A ONE CABO</b></span>
      {{-- <span class="logo-lg">
          <img src="/img/logo.png" alt="Transportaci??n" class="img-responsive" style="margin-top: 10px;">
      </span> --}}
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-calendar"></i>&nbsp;&nbsp;RESERVACIONES <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="/reservacion">Reservaciones</a></li>
                  <li><a href="/reservacion/create">Crear nueva</a></li>
                 {{--  @if (!Auth::user()->hasRole('representante'))
                  <li><a href="{{route('facturacion.index')}}">Facturaci??n</a></li>
                  @endif --}}
              </ul>
          </li>
          @if (!Auth::user()->hasRole('representante'))
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-book"></i>&nbsp;&nbsp;REPORTES <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  {{-- <li><a href="#">Imprimir voucher</a></li>
                  <li role="separator" class="divider"></li> --}}
                  <li><a href="{{route('reporte.llegadas')}}">Llegadas diarias</a></li>
                  <li><a href="{{route('reporte.salidas')}}">Salidas diarias</a></li>
              </ul>
          </li>
          @endif
          @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('superadmin'))
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-cog"></i>&nbsp;&nbsp;ADMINISTRACI??N <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="/administracion">Administracion</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/administracion/hotel">Hoteles</a></li>
                  <li><a href="/user">Usuarios</a></li>
              </ul>
          </li>
          @endif
          <li><a href="/logout"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;SALIR</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">Usuario: {{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
             <!--  <li class="user-header">
                <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->name}}
                  <small></small>
                </p>
              </li> -->
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div> -->
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU PRINCIPAL</li>
        <li>
          <a href="/">
           <i class="fa fa-dashboard"></i> <span>Inicio</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Reservaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/reservacion"><i class="fa fa-circle"></i> Reservaciones</a></li>
            <li><a href="/reservacion/create"><i class="fa fa-circle"></i> Crear nueva</a></li>
            {{-- @if (!Auth::user()->hasRole('representante'))
            <li><a href="/facturacion"><i class="fa fa-circle"></i> Facturaci??n</a></li>
            @endif --}}
          </ul>
        </li>
        @if (!Auth::user()->hasRole('representante'))
         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('reporte.llegadas')}}"><i class="fa fa-circle"></i> Llegadas diarias</a></li>
            <li><a href="{{route('reporte.salidas')}}"><i class="fa fa-circle"></i> Salidas diarias</a></li>
          </ul>
        </li>
        @endif

        @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('superadmin'))
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Administraci??n</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="/administracion"><i class="fa fa-circle"></i> Administraci??n</a></li>
            <li><a href="/administracion/hotel"><i class="fa fa-circle"></i> Hoteles</a></li>
            <li><a href="/user"><i class="fa fa-circle"></i> Usuarios</a></li>
          </ul>
        </li>
        @endif
       <!--  <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"
    @if (Request::path() == '/')
    style ="background: url('../img/background.jpg');  background-size: cover; background-position: bottom center; background-repeat: no-repeat;"
    @endif
  >
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Boxed Layout
        <small>Blank example to the boxed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Boxed</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
       <small>Powered by</small>
      <a href="http://www.blackkraken.mx" target="_blank">
        <img src="/img/blackkraken.png" alt="Black Kraken Studio" title="Black Kraken Studio" style="width: 18px; margin-left: 5px;">
      </a>
    </div>
    <a href="http://www.aonecabodeluxetransportation.com/" target="_blank">
      A One Cabo
    </a> - Sistema de Reservaciones <b><a href="/version">Version 1.0</a></b>
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/vendor/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/moment_es.js"></script>
<script src="/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="/vendor/fullcalendar/dist/locale/es.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/bootstrap-notify.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/additional-methods.min.js"></script>
<script src="/js/messages_es.min.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script src="/js/jquery.easy-autocomplete.min.js"></script>
<script src="/js/trumbowyg.min.js"></script>
<script src="/js/langs/es.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/js/demo.js"></script>
<script src="/js/main.js"></script>

@yield("footer-scripts");

</body>
</html>
