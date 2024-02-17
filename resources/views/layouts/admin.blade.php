<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Control de Asistencia</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!--Insertando Iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--Libreria JQuery-->
    <script src="{{asset('/plugins/jquery/jquery.js')}}"></script>

    <!--DATATABLE-->
    <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <!--SWEET ALERT 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--CKEDITOR-->
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/')}}" class="nav-link">Sistema de Control de Asistencia</a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/')}}" class="brand-link">
                <img src="{{url('/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Sis Asistencia</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{url('/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ optional(Auth::user())->name ?? 'Usuario' }}</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        @can('usuarios')
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-person-circle"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('usuarios/create')}}" class="nav-link">
                                        <i class="bi bi-person-add"></i>
                                        <p>Nuevo Usuario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('usuarios')}}" class="nav-link">
                                        <i class="bi bi-person-lines-fill"></i>
                                        <p>Listado de Usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan @can('miembros')
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-file-person-fill"></i>
                                <p>
                                    Miembros
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('miembros/create')}}" class="nav-link">
                                        <i class="bi bi-person-add"></i>
                                        <p>Nuevo Miembro</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('miembros')}}" class="nav-link">
                                        <i class="bi bi-person-lines-fill"></i>
                                        <p>Listado de Miembros</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan @can('ministerios')
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-building"></i>
                                <p>
                                    Ministerios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('ministerios/create')}}" class="nav-link">
                                        <i class="bi bi-building-add"></i>
                                        <p>Nuevo Ministerio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('ministerios')}}" class="nav-link">
                                        <i class="bi bi-buildings-fill"></i>
                                        <p>Listado de Ministerios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-list"></i>
                                <p>
                                    Asistencias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('asistencias/create')}}" class="nav-link">
                                        <i class="bi bi-list-check"></i>
                                        <p>Nueva Asistencia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('asistencias')}}" class="nav-link">
                                        <i class="bi bi-list-task"></i>
                                        <p>Listado de Asistencias</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-filetype-pdf"></i>
                                <p>
                                    Reportes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('asistencias/reportes')}}" class="nav-link">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                        <p>Asistencias</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('miembros/reportes')}}" class="nav-link">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                        <p>Miembros</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('ministerios/reportes')}}" class="nav-link">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                        <p>Ministerios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-building"></i>
                                <p>
                                    Pagos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('pagos/create')}}" class="nav-link">
                                        <i class="bi bi-building-add"></i>
                                        <p>Nuevo Pago</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('pagos')}}" class="nav-link">
                                        <i class="bi bi-buildings-fill"></i>
                                        <p>Listado de Pagos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" style="background-color: red">
                                <i class="bi bi-door-closed"></i> Cerrar Sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <br>
            <div class="content">
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Innovando para el futuro.
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2024 <a href="#">DemSoft</a>.</strong> Todos los derechos reservados.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

    <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

</body>

</html>