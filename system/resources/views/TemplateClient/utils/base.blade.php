<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>FashionShop</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="shortcut icon" href="{{url('public')}}/images/favicon.ico" type="{{url('public')}}/image/x-icon">
    <link rel="apple-touch-icon" href="{{url('public')}}/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/custom.css">

  @stack('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('TemplateClient.section.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
      @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('TemplateClient.section.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->

<script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="{{url('public')}}/dist/js/adminlte.min.js"></script>
<script>
  $(".table-datatable").DataTable();
</script>

@stack('script')

</body>
</html>
