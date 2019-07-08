@extends('layouts.master')

@section('content')

<section id="page-header" class="page-section">
    <div class="container effect-loaded clearfix">
        <h1>News</h1>
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/news">News</a></li>
            <li><a>Post</a></li>
            <li class="active">{{ $post->title }}</li>
        </ul>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="row">
            <div id="blog-1" class="col-lg-8">
                <div id="blog-content">
                    <article class="clearfix">
                        <div class="effect-loaded">
                            <img src="{{ Voyager::image( $post->image ) }}" style="height: 300px; object-fit: cover;">
                        </div>
                        <div class="entry-body effect-loaded">
                            <h2><strong>{{ $post->title }}</strong></h2>
                            <p>{!! $post->body !!}</p>
                        </div>
                        <div class="entry-meta effect-loaded">
                            <ul>
                                <li><span><strong>Posted:</strong> {{ $post->created_at->format('d M Y') }}</span></li>
                                @isset($post->authorId->name)
                                <li><span><strong>Category:</strong> {{ $post->category->name }}</span></li>
                                @endisset
                                @isset($post->authorId->name)
                                <li><span><strong>Author:</strong> {{ $post->authorId->name }}</span></li>
                                @endisset
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
                                <h4 class="widget-title">Category :</h4>
                                <ul class="list">
                                    @foreach($categories->reverse() as $category)
                                    <li><a href="/news/category/{{ $category->id }}">{{ $category->name }}</a></li>
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