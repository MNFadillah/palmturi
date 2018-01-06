<!DOCTYPE html>
<html>
@include('admin.head')
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Palm</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Palmturi<b> Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('admin/img/')}}/{{ Auth::user()->foto }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->nama }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('admin/img/')}}/{{ Auth::user()->foto }}" class="img-circle" alt="User Image">

                <p>
                  Administrator
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{URL::to('/adm/setting')}}" class="btn btn-default btn-flat">Edit</a>
                </div>
                <div class="pull-right">
                  <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Keluar</a>
                </div>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/img/')}}/{{ Auth::user()->foto }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->nama }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active ">
          <a href="{{URL::to('/adm')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{URL::to('/adm/alumni')}}">
            <i class="fa fa-users"></i> <span>Alumni</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{action('AdmBeritaController@create')}}"><i class="fa fa-circle-o"></i>Input</a></li>
            <li><a href="{{URL::to('/adm/berita')}}"><i class="fa fa-circle-o"></i>Lihat</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Palmturi</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('admin/js/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!-- Material Design -->
<script src="{{asset('admin/js/material.min.js')}}"></script>
<script src="{{asset('admin/js/ripples.min.js')}}"></script>
<script>
    $.material.init();
</script>

<!-- DataTables -->
<script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/dataTables.bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('admin/js/select2.full.min.js')}}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('admin/js/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('admin/js/bootstrap-datepicker.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/js/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/app.min.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset('admin/js/jquery.slimscroll.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('admin/js/dashboard2.js')}}"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/js/demo.js')}}"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
       "ordering": false
    });
    $(".select2").select2();
    $('#reservation').daterangepicker();
    $('#datepicker').datepicker({
      dateFormat: 'yyyy-dd-mm'
    });
    $('#datepicker').datepicker({
      autoclose: true
    });
    $('#mulai').datepicker({
      autoclose: true
    });
    $('#lulus').datepicker({
      autoclose: true
    });
  });
</script>
</body>
</html>
@yield('js')
