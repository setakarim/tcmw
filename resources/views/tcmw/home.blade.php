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
        <div class="col-md-4 icon-about">
            <i class="fa fa-trophy"></i>
            {{-- <span class="icon voyager-helm"></span> --}}
            {{-- <i class="{{ Voyager::compass ('voyager-helm')}}"></i> --}}
            <div class="icon voyager-bread"></div>
            <h4>Competitive</h4>
            <p>Being able to competitive in regional  or national scale</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-leaf"></i>
            <h4>Clean</h4>
            <p>Managed as professional to avoid the clash of benefit, there is no tolerance of bribe, respect the trust and integrity. Guidance to the base of good corporate governance</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-location-arrow"></i>
            <h4>Confident</h4>
            <p>Role in economy development and build the pride of nation</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-briefcase"></i>
            <h4>Commercial</h4>
            <p>Created the value added with maximal orientation, to take a decision based on the healthy business principal</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-user"></i>
            <h4>Customer Focus</h4>
            <p>Oriented in customer interest and commit to give the best services for the customer</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-check"></i>
            <h4>Capable</h4>
            <p>Managed by the professional leader and employee that have talent and technic mastery</p>
        </div>
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