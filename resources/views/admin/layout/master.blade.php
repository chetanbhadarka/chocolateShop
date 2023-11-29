<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.layout.header')
  <!-- Left side column. contains the logo and sidebar -->
@include('admin.layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
@yield('content')
  <!-- /.content-wrapper -->
 @include('admin.layout.footer')
</div>
<!-- ./wrapper -->

@include('admin.layout.scripts')
</body>
</html>
