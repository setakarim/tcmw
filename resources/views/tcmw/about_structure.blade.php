@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/bg1.jpg')}});"> </header>

<div class="container container-padding" >
    <div class="row align-items-center">
        <div class="col-12">
            <h1 class="contentTitle">Structure Organization</h1>
        </div>
        <div class="hrLeft"></div>
        
    </div>

    <div class="row" style="margin-top: 64px;">
        
        <img src="{{asset('img/structure.png')}}" style="object-fit: center;" width="100%">
       
    </div>
</div>

@endsection