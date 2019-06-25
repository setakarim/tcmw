@extends('layouts.master')

@section('content')

<!-- header -->
<header class="masthead" style="background-image:url({{asset('img/slider3.png')}});"> </header>

<div class="container container-padding" >
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">Our Services</h1>
        </div>
        <div class="hr"></div>
    </div>

    <div class="row">
        <div class="col-md-8">
                <div class="content-section">
                    @foreach ($services as $service)
                        <div id="{{ $service->id }}" class="content-section-item">
                            <h5 style="text-align: center; margin-top: 8px;">{{ $service->title }}</h5>
                            @foreach (json_decode($service->image) as $item)
                                <img src="{{ Voyager::image( $item ) }}" class="d-block w-100" >
                            @endforeach
                        </div>
                    @endforeach
                </div>
        </div>
        <div class="col-md-4">
            <div class="sidebar-item">
                <div class="make-me-sticky" id="sidebar-services">
                    @foreach ($services as $service)
                        <h5><a href="#{{ $service->id }}" class="content-side @if ($loop->iteration == 1) active @endif">{{ $service->title }}</a></h5> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection