@extends('layouts.master')

@section('content')

<section id="section-slider">
    <div class="slider-wrapper">
        <div id="slider" class="nivoSlider">
            <img src="{{asset('img/slider1.png')}}" alt="" />
            <img src="{{asset('img/slider2.png')}}" alt="" />
            <img src="{{asset('img/slider3.png')}}" alt="" />
        </div>
    </div>
</section>

<section id="page-section-2" class="page-section">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-12 text-center">
                <h1><strong>Corporate Governance</strong></h1>
            </div>
        </div>
        <div id="features-12" class="row">
            @foreach ($scopes as $scope)
            <div class="col-md-4 effect-loaded"> <i class="fa feature-icon {{ $scope->icon }}"></i>
                <h3>{{ $scope->name }}</h3>
                <p>{{ $scope->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="page-section-1" class="page-section" style="border-top:1px solid #eee;">
    <div class="container">
        <div class="row">
            <div class="col-md-9 effect-loaded">
                <h3><strong>Getting Closer With Us</strong></h3>
                <h4 style="margin-top:12px;">PT Tunas Cahaya Mandiri Widyatama</h4>
            </div>
            <div class="col-md-2 effect-loaded pull-right">
                <div class="btn-flat"><a href="/about">About Us</a></div>
            </div>
        </div>
    </div>
</section>

<section id="page-section-5" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="client-1">
                    <h1 class="effect-loaded">Our Partner</h1>
                    <br />
                    <div class="client-logo">
                        @foreach ($partners as $partner)
                            <a href="{{ $partner->link }}" target="_blank">
                                <img src="{{ Voyager::image( $partner->image ) }}" height="50"alt="{{ $partner->name }}" style="margin: 24px;">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection