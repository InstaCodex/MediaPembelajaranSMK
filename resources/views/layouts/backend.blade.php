<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard E-Learning</title>
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
                <img src="./gambar/guru.jpg"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
    
                <span class="brand-text font-weight-light">
<<<<<<< HEAD
                    E-Learning
                </span>
=======
                    @if(auth()->user()->role == "admin")
                    {{ Auth::user()->role }}
                    E-Learing
                @elseif (auth()->user()->role == "guru")
                {{ Auth::user()->role }}
                E-Learing
                </span>
                    @endif
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
<<<<<<< HEAD
                        <img src="./gambar/guru.jpg" class="img-circle elevation-2"
=======
                        <img src="./gambar/admin.png" class="img-circle elevation-2"
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
                            alt="User Image">
                    </div>
                    <div class="info" style="color: white">
                        {{ Auth::user()->role }}
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        @if(auth()->user()->role == "admin")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Dashboard Admin
                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ url('/users') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
<<<<<<< HEAD
                                <p>Data Pengguna </p>
=======
                                <p>Data User </p>
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
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
                                <p>Data Kategori </p>
                            </a>
                        </li>

                        @elseif (auth()->user()->role == "guru")
                        <li class="nav-item">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>
                                        Dashboard Guru
                                    </p>
                                </a>
                            </li>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/students') }}" class="nav-link">
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
<<<<<<< HEAD
                                <p>Data Kategori </p>
                            </a>
                        </li>

                        @elseif (auth()->user()->role == "siswa")
                        <li class="nav-item">
                            <a href="{{ url('/book') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buku Siswa</p>
=======
                                <p>Data Categori </p>
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
                            </a>
                        </li>

                        @endif

                            <li class="nav-item d-none d-sm-inline-block">
                                @if (auth()->check())
                                    <a href="{{ route('logout') }}" class="nav-link"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
<<<<<<< HEAD
                                        <b>Keluar</b>
=======
                                        <b>Logout</b>
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
                                    </a>
            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                @endif
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