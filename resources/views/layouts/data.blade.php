<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Assalaam Motorsport</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('template/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/dist/css/skins/_all-skins.min.css')}}">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   @include('layouts.header')
  <aside class="main-sidebar">
    <section class="sidebar">
      @include('layouts.side')
    </section>
    </aside>

  <div class="content-wrapper">
    <section class="content">
     @yield('content')
    </section>
    </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 Assalaam Motorsport.</strong> All rights
    reserved.
  </footer>
</div>

<script src="{{asset('template/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('template/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('template/dist/js/demo.js')}}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>