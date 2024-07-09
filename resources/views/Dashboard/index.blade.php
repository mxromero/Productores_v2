<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('Dashboard') }}" class="brand-link">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="brand-image elevation-3" style="opacity: .8">
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->descripcion }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('Dashboard') }}" class="nav-link @if(Request::is('/')) active @endif">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Recepciones
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('NotaRecepcion') }}" class="nav-link @if(Request::is('nota-recepcion')) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nota Recepción</p>
                                    </a>
                                </li>
                            </ul>
                           <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('HistorialNotaRecepcion') }}" class="nav-link @if(Request::is('nota-recepcion-anterior')) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mes Anterior</p>
                                    </a>
                                </li>
                            </ul> 
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('Liquidaciones') }}" class="nav-link @if(Request::is('liquidaciones')) active @endif">
                                <i class="nav-icon fas fa-money-check-alt"></i>
                                <p>Liquidaciones</p>
                            </a>
                        </li> --}}
                        <li class="nav-header">Acciones</li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Cerrar sesión</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
                <div class="col-md-11 ml-md-4">
                    @yield('content')
                </div>
        </div>
    </div>


</body>
</html>
