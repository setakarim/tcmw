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
                    <ul class="nav nav-tabs" id="vtabs1">
                        <li class="active"><a href="#tab1"><i class="icon-stackexchange"> </i> Mission</a></li>
                        <li><a href="#tab2"><i class="icon-shield"> </i>Vision</a></li>
                    </ul>
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