@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/slider2.png')}});"> </header>
{{-- <header>
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
	</header> --}}

<div class="container">
	<br><br>
	<div class="row">
		<div class="col-md-8 news" >
			<div class="row ">
				<div class="col-3 ">
					<h2 class="contentTitle">News</h2>
					<div class="hrLeft"></div>
				</div>
			</div>
			<div class="row">
				@foreach($posts->reverse() as $post)
				<div class="col-md-6 news">
					<div class="card" style="width: 100%">
						<img class="card-img-top" src="{{ Voyager::image( $post->image ) }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">{{ $post->title }}</h5>
							<p class="card-text">{{ str_limit(strip_tags($post->body)) }} <span> <a href="/news/{{ $post->slug }}"> Read More</a></span></p>
							<p><span style="text-style: bold;">{{ $post->author_id }}</span> {{ $post->created_at->format('m/d/Y') }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		
		<div class="col-md-4 news" style="background-color:#F8F8F8">
			<div style="background-color:#16a085; width: 150px; height:30px; margin-left: -14px;">
				<p style="text-align:center; font-size: 18px; color:#ffffff; ">News Category</p>
			</div>
			<div class="hrLeft" style="margin-left: -14px;"></div>
			<ul style="margin-left:-10px; margin-bottom:60px; ">
			@foreach($categories->reverse() as $category)
				<li>{{ $category->name }}</li>
			@endforeach
			</ul>
			<div style="background-color:#16a085; width: 150px; height:30px; margin-left: -14px;">
				<p style="text-align:center; font-size: 18px; color:#ffffff; ">Latest News</p>
			</div>
			<div class="hrLeft" style="margin-left: -14px;"></div>
			<div class="row">
			@foreach($posts->reverse() as $post)
				<div class="col-md-12 news" >
					<div class="row">
						<div class="col-md-4">
							<img src="{{ Voyager::image( $post->image ) }}">
						</div>
						<div class="col-md-8">
							<a href="/news/{{ $post->slug }}">
								<h5>{{ $post->title }}</h5>
								<p>{{ str_limit(strip_tags($post->body)) }}</p>
							</a>
						</div>
					</div>
				</div>
				@if ($loop->iteration == 3)
					@break
				@endif
			@endforeach
			</div>
		</div>
	</div>
</div>

@endsection