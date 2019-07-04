@extends('layouts.master')

@section('content')
<section id="page-header" class="page-section">
    <div class="container effect-loaded clearfix">
        <h1>About us</h1>
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">About Us</li>
        </ul>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 effect-loaded">
                <h3 class="heading">About <strong>Our Company</strong></h3>
                <p>{!! $about !!}</p>
            </div>
            <div class="col-lg-5">
                <h3 class="heading effect-loaded">Our Clients</h3>
                <div class="client-1">
                    <div class="client-logo">
                        @foreach ($partners as $partner)
                        <a href="{{ $partner->link }}" target="_blank">
                            <img src="{{ Voyager::image( $partner->image ) }}" height="50" alt="{{ $partner->name }}"
                                style="margin: 24px;">
                        </a>
                        @endforeach
                    </div>
                </div>
                <hr>

                <div class="horizotal-tabs">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" id="vtabs1">
                        <li class="active"><a href="#tab1"><i class="icon-stackexchange"> </i> Mission</a></li>
                        <li><a href="#tab2"><i class="icon-shield"> </i>Vision</a></li>
                    </ul>
                    <!-- Tabs Content -->
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab1">
                            <p style="font-size: 16px">{{strip_tags($vision)}}</p>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <p style="font-size: 16px">{{strip_tags($mission)}}</p>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="page-section-1" class="page-section" style="border-top:1px solid #eee;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 effect-loaded">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h1><strong>Structure</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <center>
                        <img src="{{ Voyager::image( $structure->image ) }}" style="object-fit: contain;" width="70%">
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="page-section-2" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h1><strong>Project Reference List</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-striped">
                        <thead style="color:#ffffff; background-color:#16a085;">
                            <tr>
                                <th scope="col">Customer</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Area</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->customer }}</td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project->qty }}</td>
                                <td>{{ $project->area }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- @section('content')

<header class="masthead" style="background-image:url({{asset('img/slider4.png')}});"> </header>

<div class="container container-padding">
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">About Us</h1>
        </div>
        <div class="hr"></div>
    </div>

    <div class="row about">
        <div class="col-md-7">
            <p>{!! $about !!}</p>
        </div>
        <div class="col-md-1"></div>

        <div class="col-md-4">
            <img src="{{asset('img/slider1.png')}}" style="object-fit: cover;" height="300px" width="100%"
                class="img-about">
            <div class="row card-vision-mission">
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
                    </div>
                    <div class="card-body ">
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
    </div>
</div>

<div style="background-color: #F8F8F8">
    <div class="container container-padding">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="contentTitle">Structure</h1>
            </div>
            <div class="hr"></div>
        </div>
        <div class="row about-structure">
            <center>
                <img src="{{ Voyager::image( $structure->image ) }}" style="object-fit: contain;" width="70%">
            </center>
        </div>
    </div>
</div>

<div class="container container-padding">
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">Project Reference List</h1>
        </div>
        <div class="hr"></div>
    </div>
    <div class="row about-project">
        <table class="table table-striped">
            <thead style="color:#ffffff; background-color:#16a085;">
                <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Area</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->customer }}</td>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->qty }}</td>
                    <td>{{ $project->area }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection --}}