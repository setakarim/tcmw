@extends('layouts.master')

@section('content')

<section id="page-header" class="page-section">
    <div class="container effect-loaded clearfix">
        <h1>Services</h1>
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Services</li>
        </ul>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="row">
            <div id="blog-1" class="col-lg-8">
                <div id="blog-content">
                    <article class="clearfix">
                        <div class="entry-slider">
                            <ul class="slides">
                                @foreach($services as $service)
                                @foreach (json_decode($service->image) as $item)
                                <li><a href="/services/{{$service->id}}"><img src="{{ Voyager::image( $item ) }}"></a>
                                </li>
                                @endforeach
                                @if ($loop->iteration == 5)
                                @break
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
            <div id="sidebar" class="col-md-4">
                <div class="sidebar-bg">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="widget">
                                <h4 class="widget-title">Our Scope Of Work Include :</h4>
                                <ul class="list">
                                    @foreach ($services as $service)
                                    <li><a href="/services/{{$service->id}}">{{ $service->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection