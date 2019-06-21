@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/slider2.png')}});"> </header>

<div class="container container-padding" >
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">About Us</h1>
        </div>
        <div class="hr"></div>
    </div>

    <div class="row" style="margin-top: 64px;">
        <div class="col-md-7 text-right">
            
            <p>{!! $about !!}</p>
            
            <div class="row" style="margin-top: 64px;">
                 <!-- Tabs on Plain Card -->
                 <div class="card card-nav-tabs card-plain">
                        <div class="card-header card-header-color">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs" style="margin: auto;">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#vision" data-toggle="tab">Vision</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#mission" data-toggle="tab">Mission</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><div class="card-body ">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="vision">
                                    <p style="font-style: italic; font-size: 20px">{!! $vision !!}</p>
                                </div>
                                <div class="tab-pane" id="mission">
                                    <p style="font-style: italic; font-size: 20px">{!! $mission !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs on plain Card -->
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <img src="{{asset('img/slider1.png')}}" style="object-fit: cover;" height="450px" width="100%">
        </div>
    </div>
</div>

<div style="background-color: #F8F8F8">
    <div class="container container-padding" >
        <div class="row">
            <div class="col-md-5" style="margin: auto;">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h1 style="font-size: 64px">240</h1>
                        <p>Amount Staff</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h1 style="font-size: 64px">90</h1>
                        <p>Car Operational</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h1 style="font-size: 64px">45</h1>
                        <p>Motorcycle Operasional</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="row">
                    <h3 style="margin-bottom: 24px;">We currently focus on various areas including :</h3>
                    <ul>
                        <li>Southern Sumatera (Jambi, Lampung, Palembang, Bangka & Belitung, Bengkulu)</li>
                        <li>West Sumatera (Padang, Pekanbaru, Medan, Batam)</li>
                        <li>Jabodetabek</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection