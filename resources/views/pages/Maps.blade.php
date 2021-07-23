@extends('layout.Home')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Pages</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{route('home.index')}}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('maps.index')}}">Maps</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                </div>
            </div>
            <!-- Card stats -->
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
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card border-0">
                <div id="map" class="map-canvas" data-lat="40.748817" data-lng="-73.985428"
                    style="height: 600px; position: relative; overflow: hidden;">
                    <script>
                        var map = L.map('map').setView([-0.8917, 119.8707], 13);
                
                        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=iVwxS42CVMlobjgLaPRM', {
                            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                        }).addTo(map);
                        var locations = [
                            @foreach ($data['marker_lakalintas'] as $d)
                            [`
                                <div class="card card-profile">
                                    <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col">
                                        <div class="card-profile-stats d-flex justify-content-center">
                                            <div>
                                                <span class="description">Korban</span>
                                                <span class="heading">{{$d->jumlah_korban}}</span>
                                            </div>
                                            <div>
                                                <span class="description">Kondisi</span>
                                                <span class="heading">{{$d->kon_rol->kon_kasus}}</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="h3">
                                        {{$d->kasus_rol->j_kasus}}
                                        </h5>
                                        <div class="h5 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>Alamat - {{$d->jalan_rol->nama_jalan}}
                                        </div>
                                        <div>
                                        <i class="ni education_hat mr-2"></i>{{$d->ket}}
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            `, {{ $d->jalan_rol->coordinat }}], 
                            @endforeach
                        ];
                        var greenIcon = L.icon({
                            iconUrl: '{{asset('assets/marker/lakalintas.png')}}',
                            iconSize:     [75, 50], // size of the icon
                        });
                        for (var i = 0; i < locations.length; i++) {
                            marker = new L.marker([locations[i][1], locations[i][2]],{icon: greenIcon})
                                .bindPopup(locations[i][0])
                                .addTo(map);
                        }
                        // Batas kota
                        var locations = [
                            @foreach ($data['marker_kriminalitas'] as $d)
                            [`
                                <div class="card card-profile">
                                    <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col">
                                        <div class="card-profile-stats d-flex justify-content-center">
                                            <div>
                                                <span class="description">Korban</span>
                                                <span class="heading">{{$d->jumlah}}</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="h3">
                                        {{$d->j_kasus_rol->j_kasus}}
                                        </h5>
                                        <div class="h5 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>Alamat - {{$d->tkp_rol->kelurahan}}
                                        </div>
                                        <div>
                                        <i class="ni education_hat mr-2"></i>{{$d->ket}}
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            `, {{ $d->tkp_rol->koordinat }}], 
                            @endforeach
                        ];
                        var greenIcon_kriminalitas = L.icon({
                            iconUrl: '{{asset('assets/marker/kriminalitas.png')}}',
                            iconSize:     [75, 50], // size of the icon
                        });
                        for (var i = 0; i < locations.length; i++) {
                            marker = new L.marker([locations[i][1], locations[i][2]],{icon: greenIcon_kriminalitas})
                                .bindPopup(locations[i][0])
                                .addTo(map);
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection