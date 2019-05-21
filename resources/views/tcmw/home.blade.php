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
        <div class="col-md-4">
            <h1 class="font-weight-light">Half Page Image Slider</h1>
            <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The
                images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
        </div>
        <div class="col-md-4">
            <h1 class="font-weight-light">Half Page Image Slider</h1>
            <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The
                images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
        </div>
        <div class="col-md-4">
            <h1 class="font-weight-light">Half Page Image Slider</h1>
            <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The
                images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
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