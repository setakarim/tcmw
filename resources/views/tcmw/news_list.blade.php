@extends('layouts.master')

@section('content')

<section id="page-header" class="page-section">
    <div class="container effect-loaded clearfix">
        <h1>News</h1>
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">News</li>
        </ul>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="row">
            <div id="blog-1" class="col-lg-8">
                <div id="blog-content" class="row">
					@foreach($posts->reverse() as $post)
                    <div class="col-lg-6">
                        <article class="clearfix">
                            <div class="effect-loaded">
                                <img src="{{ Voyager::image( $post->image ) }}" style="height: 200px; object-fit: cover" />
                            </div>
                            <div class="entry-body effect-loaded">
                                <h3 class="entry-title"><a href="/news/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                <p>{!! Str::words(strip_tags($post->body), 40) !!}</p>
								<p>
									<strong style="color: #39c381">
										@isset($post->authorId->name)
										{{ $post->authorId->name }}
										@endisset
									</strong> {{ $post->created_at->format('d M Y') }}
								</p>
                            </div>
                        </article>
					</div>
					@endforeach
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