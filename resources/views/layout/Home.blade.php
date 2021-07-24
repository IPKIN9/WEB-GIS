<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>GIS Dashboard by Masso-Gis</title>

    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

    <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/brand/costume.png') }}" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('home.index') ? 'active' : ''}}"
                                href="{{route('home.index')}}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('profile.index') ? 'active' : ''}}"
                                href="{{route('profile.index')}}">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('maps.index') ? 'active' : ''}}"
                                href="{{route('maps.index')}}">
                                <i class="ni ni-pin-3 text-primary"></i>
                                <span class="nav-link-text">Maps</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Data Terbaru</span>
                        <h3 class="mt-2">Lakalintas</h3>
                        <div class="table-responsive mt-2">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Jalan</th>
                                        <th scope="col">Korban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($special['all_laka'] as $d)
                                    <tr>
                                        <th scope="row">
                                            {{$d->jalan_rol->nama_jalan}}
                                        </th>
                                        <td>
                                            {{$d->jumlah_korban}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h3 class="mt-2">Kriminalitas</h3>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Kelurahan</th>
                                        <th scope="col">Kasus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($special['all_kriminal'] as $d)
                                    <tr>
                                        <th scope="row">
                                            {{$d->tkp_rol->kelurahan}}
                                        </th>
                                        <td>
                                            {{$d->jumlah}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </h6>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        @yield('content')
        <div class="container-fluid mt-2">
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            © 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                                target="_blank">Masso-Gis Team</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>