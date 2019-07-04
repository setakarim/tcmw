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
                <h1 style="font-weight: bold;">Corporate Governance</h1>
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
        <div class="row no-padding">
            <div class="col-lg-9 effect-loaded">
                <h3><strong>PT Tunas Cahaya Mandiri Widyatama</strong></h3>
                <h4>WE ARE A LEADING TELECOMUNICATIONS AND CONSTRUCTOR COMPANY IN EAST
                    JAVA AND EXPANDING ALL ACROSS INDONESIA</h4>
            </div>
            <div class="col-lg-2 effect-loaded no-padding pull-right">
                <div class="btn-flat"><a href="/about">Getting Closer With Us</a></div>
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
                            <a href="{{ $partner->link }}">
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

{{-- @section('content')

<!-- header -->
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/slider1.png') }}" class="d-block w-100">
</div>
<div class="carousel-item">
    <img src="{{ asset('img/slider2.png') }}" class="d-block w-100">
</div>
<div class="carousel-item">
    <img src="{{ asset('img/slider3.png') }}" class="d-block w-100">
</div>
</div>

<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</header>

<!-- Corporate Governance -->
<div class="container container-padding">
    <div class="icon-about-title">
        <div class="row align-items-center ">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold contentTitle">Corporate Governance</h1>
            </div>
            <div class="hr"></div>
        </div>
    </div>

    <div class="row icon-about">
        @foreach ($scopes as $scope)
        <div class="col-md-4 icon-about">
            <i class="fa {{ $scope->icon }}"></i>
            <h4>{{ $scope->name }}</h4>
            <p>{{ $scope->description }}</p>
        </div>
        @endforeach
    </div>
</div>

<!-- Parallax -->
<div class="container-padding-parallax parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="font-weight-bold" style="color: #fff">What We Do</h1>
                <p style="color: #fff">Our scope of work include</p>
            </div>
            <div class="col-md-2" style="margin: auto;">
                <a href="/services">
                    <button type="button" class="btn btn-outline-light" style="padding: 12px 24px;">Scope of
                        Work</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container container-padding">
    <div class="icon-partner">
        <div class="row align-items-center ">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold contentTitle">Our Partner</h1>
            </div>
            <div class="hr"></div>
        </div>
    </div>
    <div class="row image-partner">
        @foreach ($partners as $partner)
        <div class="ml-auto mr-auto">
            <a href="{{ $partner->link }}" target="_blank">
                <img src="{{ Voyager::image( $partner->image ) }}" height="50" alt="{{ $partner->name }}"
                    style="margin: 24px;">
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection --}}