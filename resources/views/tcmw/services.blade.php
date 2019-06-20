@extends('layouts.master')

@section('content')

<!-- header -->
<header class="masthead-services" style="background-image:url({{asset('img/slider3.png')}});"> </header>

<div class="container container-padding" >
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">Our Services</h1>
        </div>
        <div class="hr"></div>
    </div>

    <div class="row" style="margin-top: 64px;">
        <div class="col-md-8">
                <div class="content-section">
                    <div id="1" style="padding: 24px;">
                        <img src="{{ asset('img/services/1.png') }}" class="d-block w-100" >
                        <h5 style="text-align: center; margin-top: 8px;">New connection and Upgrade PLN</h5>
                    </div>
                    <div id="2" style="padding: 24px;">
                        <img src="{{ asset('img/services/2.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Supply, Repair and Improvement Grounding</h5>
                    </div>
                    <div id="3" style="padding: 24px;">
                        <img src="{{ asset('img/services/3.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Supply and Install OB Light</h5>
                    </div>
                    <div id="4" style="padding: 24px;">
                        <img src="{{ asset('img/services/4.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Service Maintenance and Overhaul Genset</h5>
                    </div>
                    <div id="5" style="padding: 24px;">
                        <img src="{{ asset('img/services/5.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Service Maintenance and Install Air Conditioner</h5>
                    </div>
                    <div id="6" style="padding: 24px;">
                        <img src="{{ asset('img/services/6.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Environment Service and Power Backup Service</h5>
                    </div>
                    <div id="7" style="padding: 24px;">
                        <img src="{{ asset('img/services/7.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Service and Repair Module Rectifier</h5>
                    </div>
                    <div id="8" style="padding: 24px;">
                        <img src="{{ asset('img/services/8.png') }}" class="d-block w-100" >
                        <h5 style="text-align: center; margin-top: 8px;">Maintenance and ServiceTrafo PLN</h5>
                    </div>
                    <div id="9" style="padding: 24px;">
                        <img src="{{ asset('img/services/9.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Supply Install Panel ATS, AMF, COS</h5>
                    </div>
                    <div id="10" style="padding: 24px;">
                        <img src="{{ asset('img/services/10.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Supply Sparepart Genset and Electrical</h5>
                    </div>
                    <div id="11" style="padding: 24px;">
                        <img src="{{ asset('img/services/11.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Supply Refuel Solar</h5>
                    </div>
                    <div id="12" style="padding: 24px;">
                        <img src="{{ asset('img/services/12.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Manage Service Resources</h5>
                    </div>
                    <div id="13" style="padding: 24px;">
                        <img src="{{ asset('img/services/13.png') }}" class="d-block w-100">
                        <img src="{{ asset('img/services/14.png') }}" class="d-block w-100">
                        <img src="{{ asset('img/services/15.png') }}" class="d-block w-100">
                        <img src="{{ asset('img/services/16.png') }}" class="d-block w-100">
                        <img src="{{ asset('img/services/17.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">Service Maintenance Fiber Optic</h5>
                    </div>
                    <div id="14" style="padding: 24px;">
                        <img src="{{ asset('img/services/18.png') }}" class="d-block w-100">
                        <img src="{{ asset('img/services/19.png') }}" class="d-block w-100">
                        <h5 style="text-align: center; margin-top: 8px;">CME Colocation Outdoor</h5>
                    </div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="sidebar-item">
                <div class="make-me-sticky" id="sidebar-services">
                    <h5><a href="#1" class="content-side active">New connection and Upgrade PLN</a></h5>
                    <h5><a href="#2" class="content-side">Supply, Repair and Improvement Grounding</a></h5>
                    <h5><a href="#3" class="content-side">Supply and Install OB Light</a></h5>
                    <h5><a href="#4" class="content-side">Service Maintenance and Overhaul Genset</a></h5>
                    <h5><a href="#5" class="content-side">Service Maintenance and Install Air Conditioner</a></h5>
                    <h5><a href="#6" class="content-side">Environment Service and Power Backup Service</a></h5>
                    <h5><a href="#7" class="content-side">Service and Repair Module Rectifier</a></h5>
                    <h5><a href="#8" class="content-side">Maintenance and ServiceTrafo PLN</a></h5>
                    <h5><a href="#9" class="content-side">Supply Install Panel ATS, AMF, COS</a></h5>
                    <h5><a href="#10" class="content-side">Supply Sparepart Genset and electrical</a></h5>
                    <h5><a href="#11" class="content-side">Supply Refuel Solar</a></h5>
                    <h5><a href="#12" class="content-side">Manage Service Resources</a></h5>
                    <h5><a href="#13" class="content-side">Service Maintenance Fiber Optic</a></h5>
                    <h5><a href="#14" class="content-side">CME Colocation Outdoor</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection