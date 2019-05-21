@extends('layouts.master')

@section('content')

<!-- header -->
<header style="margin-top: 24pt">
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

<!-- What We Do -->
<div class="container-fluid container-padding">
    <div class="row">
        <div class="col-md-4 icon-about">
            <i class="fa fa-trophy"></i>
            <h2 class="font-weight-bold">Competitive</h2>
            <p class="lead">Being able to competitive in regional  or national scale</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-leaf"></i>
            <h2 class="font-weight-bold">Clean</h2>
            <p class="lead">Managed as professional to avoid the clash of benefit, there is no tolerance of bribe, respect the trust and integrity. Guidance to the base of good corporate governance</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-location-arrow"></i>
            <h2 class="font-weight-bold">Confident</h2>
            <p class="lead">Role in economy development and build the pride of nation</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-briefcase"></i>
            <h2 class="font-weight-bold">Commercial</h2>
            <p class="lead">Created the value added with maximal orientation, to take a decision based on the healthy business principal</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-user"></i>
            <h2 class="font-weight-bold">Customer Focus</h2>
            <p class="lead">Oriented in customer interest and commit to give the best services for the customer</p>
        </div>
        <div class="col-md-4 icon-about">
            <i class="fa fa-check"></i>
            <h2 class="font-weight-bold">Capable</h2>
            <p class="lead">Managed by the professional leader and employee that have talent and technic mastery</p>
        </div>
    </div>
</div>

<!-- Scope of Work -->
<div class="container-fluid container-padding-gray">
    <div class="row">
        <div class="col-md-10">
            <h1 class="font-weight-light">Half Page Image Slider</h1>
            <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The
                images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
        </div>
        <div class="col-md-2 ml-auto" style="margin: auto;">
            <button type="button" class="btn btn-outline-dark" style="padding: 12px 24px;">Scope of Work</button>
        </div>
    </div>
</div>

<!-- Parallax -->
<div class="container-fluid container-padding parallax">
    <div class="row">
        <div class="col-md-10">
            <h1 class="font-weight-light">Half Page Image Slider</h1>
            <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The
                images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
        </div>
        <div class="col-md-2 ml-auto" style="margin: auto;">
            <button type="button" class="btn btn-outline-dark" style="padding: 12px 24px;">Scope of Work</button>
        </div>
    </div>
</div>
    
@endsection