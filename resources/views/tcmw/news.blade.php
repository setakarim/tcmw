@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/slider2.png')}});"> </header>

<div class="container">
	<br><br>
	<div class="row">
	@foreach($posts->reverse() as $post)
		<div class="col-md-6 news" >
			<div class="row">
				<div class="col-md-4">
					<img src="{{ Voyager::image( $post->image ) }}">
				</div>
				<div class="col-md-8">
					<a href="/news/{{ $post->slug }}">
						<h4>{{ $post->title }}</h4>
						<p>{{ str_limit(strip_tags($post->body)) }}</p>
					</a>
					<p><span style="text-style: bold;">{{ $post->author_id }}</span> {{ $post->created_at->format('m/d/Y') }}</p>
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>

@endsection