<!DOCTYPE html>
<html>
    <head>
        <meta charset="=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <title>Media Pembelajaran</title>
        <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{'halaman/'}}https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <!-- Theme style -->
  <link rel="stylesheet" href="{{'halaman/'}}dist/css/adminlte.min.css">
  
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <label class="logo">Media Pembelajaran SMA</label>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ 'contributor' }}">Contributors</a></li>
                    <li><a href="{{ 'login' }}">Login</a></li>
                </ul>
            </div>
            @yield('content')
             </div>
             <!-- jQuery -->
    <script src="{{'halaman/'}}plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{'halaman/'}}plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="{{'halaman/'}}dist/js/adminlte.js"></script>
    {{-- <!-- AdminLTE for demo purposes -->
    <script src="{{'halaman/'}}dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) --> --}}
    <script src="{{'halaman/'}}dist/js/pages/dashboard.js"></script>
    </body>
    </html>