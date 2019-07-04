@extends('layouts.master')

@section('content')

<section id="page-header" class="page-section">
    <div class="container effect-loaded clearfix">
        <h1>Services</h1>
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li class="active">{{$service->title}}</li>
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
                                @foreach (json_decode($service->image) as $item)
                                <li><a href="/services/{{$service->id}}"><img src="{{ Voyager::image( $item ) }}"></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="entry-body effect-loaded" style="padding-right: 10px;">
                            <p>{!! $service->description !!}</p>
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
                                    @foreach ($services as $item)
                                    <li>
                                        <a href="/services/{{$item->id}}">
                                            @if($item->id == $service->id)
                                            <span style="color: #39c381;"><strong>{{ $item->title }}</strong></span>
                                            @else
                                            {{ $item->title }}
                                            @endif
                                        </a>
                                    </li>
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