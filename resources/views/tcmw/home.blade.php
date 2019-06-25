@extends('layouts.master')

@section('content')

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

    <div class="row">
        @foreach ($services as $service)
            <div class="col-md-4 icon-about">
                <i class="fa {{ $service->icon }}"></i>
                <h4>{{ $service->name }}</h4>
                <p>{{ $service->description }}</p>
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
            <div class="col-md-2 ml-auto" style="margin: auto;">
                <a href="/services">
                    <button type="button" class="btn btn-outline-light" style="padding: 12px 24px;">Scope of Work</button>
                </a>
            </div>
        </div>
    </div>
</div>
    
@endsection