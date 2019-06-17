@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{ Voyager::image( $post->image ) }});"> </header>

<div class="container container-padding">
    <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->title }}</h1>
			<p>{!! $post->body !!}</p>
		</div>
	</div>
</div>
    
@endsection