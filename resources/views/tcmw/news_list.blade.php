@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/slider2.png')}});"> </header>

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
							<h5 class="card-title"><a href="/news/{{ $post->slug }}">{{ $post->title }}</a></h5>
							<p class="card-text">{{ str_limit(strip_tags($post->body)) }} <span> <a href="/news/{{ $post->slug }}"> Read More</a></span></p>
							<p>
								<span style="text-style: bold;">
									@isset($post->authorId->name)
									{{ $post->authorId->name }},
									@endisset
								</span>
								 {{ $post->created_at->format('d M Y') }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		
		<div class="col-md-4 news">
		<div style="background-color:#F8F8F8; padding: 14px;">
			<div style="background-color:#16a085; width: 150px; height:30px; margin-left: -14px;">
				<p style="text-align:center; font-size: 18px; color:#ffffff; ">News Category</p>
			</div>
			<div class="hrLeft" style="margin-left: -14px;"></div>
			<ul style="margin-left:-10px; margin-bottom:60px; ">
			@foreach($categories->reverse() as $category)
				<li><a href="/news/category/{{ $category->id }}">{{ $category->name }}</a></li>
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
</div>

@endsection