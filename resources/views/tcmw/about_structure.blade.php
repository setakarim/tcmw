@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/slider4.png')}});"> </header>

<div class="container container-padding" >
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">Structure Organization</h1>
        </div>
        <div class="hr"></div>
    </div>

    <div class="row" style="margin-top: 64px;">
        <center>
            <img src="{{asset('img/structure.png')}}" style="object-fit: center;" width="80%">
        </center>
    </div>
</div>

@endsection