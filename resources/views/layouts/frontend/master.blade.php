
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thimphu Futsal</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="icon" href="{{ url('dist/img/futsal_logo.jpg') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @yield('content')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
