@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{ Voyager::image( $post->image ) }});"> </header>

<div class="container container-padding">
    <div class="row">
		<div class="col-md-7">
			<h1>{{ $post->title }}</h1>
			<p>{!! $post->body !!}</p>
		</div>

		<div class="col-md-1"></div>
		
		<div class="col-md-4 news-info" style="background-color:#F8F8F8">
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