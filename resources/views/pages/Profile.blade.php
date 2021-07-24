@extends('layout.Home')
@section('content')
<div class="container-fluid mt-5" style="margin-bottom: 90px;">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="{{ asset('assets/img/theme/img-back.jpg') }}" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/theme/icon_pict.png') }}" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">

                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5 class="h3">
                            Polres Palu<span class="font-weight-light"></span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2">{{$data['contact_us']->alamat}}</i>
                        </div>
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>Telepon : {{$data['contact_us']->telepon}}
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>{{$data['contact_us']->email}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                    </div>
                </div>
                <div class="card-body" style="height: 385px;">
                    <form>
                        <h6 class="heading-small text-muted mb-4 mt-5">Tentang Polres</h6>
                        <div class="pl-lg-4">
                            <div class="form-group mt-2">
                                <p class="text-center">
                                    {{$data['web_desc']->web_description}}
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection