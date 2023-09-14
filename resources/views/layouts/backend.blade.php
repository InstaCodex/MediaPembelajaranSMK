<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin E-Learning</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="./gambar/puan.jpg"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Guru E-Learing</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./gambar/puan.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">DSFR</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        <li class="nav-item">
                            <a href="{{ url('/users') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Siswa </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/books') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Buku </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/categories') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Categori </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/logout') }}" class="nav-link" method = 'POST'>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    <
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">

                @yield('content')

                <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>  
                <!-- AdminLTE App -->
                <script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
            </section>

</body>
</html>