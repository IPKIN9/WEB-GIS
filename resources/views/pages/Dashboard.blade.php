@extends('layout.Home')
@section('content')
<div class="header pb-6 d-flex align-items-center"
    style="min-height: 500px; background-image: url({{ asset('assets/img/theme/profile-cover-2.jpg') }}); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-9 col-md-10">
                <h1 class="display-2 text-white">Geographic Information System</h1>
                <p class="text-white mt-0 mb-5">Sistem informasi geografis Lakalintas & Kriminalitas kota Palu Sulawesi
                    Tengah</p>
                <a href="{{route('maps.index')}}" class="btn btn-neutral"><i class="ni ni-pin-3"></i> MAPS</a>
            </div>
        </div>
    </div>
</div>
<div class="header-body mt-2">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Lakalintas</h5>
                            <span class="h2 font-weight-bold mb-0">{{$data['lakalintas']}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                        <span class="text-nowrap">Tahun ini</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Curas</h5>
                            <span class="h2 font-weight-bold mb-0">{{$data['curas']}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                        <span class="text-nowrap">Tahun ini</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Curanmor</h5>
                            <span class="h2 font-weight-bold mb-0">{{$data['curanmor']}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                        <span class="text-nowrap">Tahun ini</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Hari ini</h5>
                            <span class="h2 font-weight-bold mb-0">{{$data['today']}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="ni ni-chart-bar-32"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                        <span class="text-nowrap">Kumulatif</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection