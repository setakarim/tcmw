@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/slider4.png')}});"> </header>

<div class="container container-padding" >
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">About Us</h1>
        </div>
        <div class="hr"></div>
    </div>

    <div class="row" style="margin-top: 64px;">
        <div class="col-md-7">
            <p>{!! $about !!}</p>
            </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <img src="{{asset('img/slider1.png')}}" style="object-fit: cover;" height="300px" width="100%">
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
        <div class="container container-padding" >
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <h1 class="contentTitle">Structure</h1>
                </div>
                <div class="hr"></div>
                
            </div>
            <div class="row" style="margin-top: 24px;">
                <center>
                    <img src="{{ Voyager::image( $structure->image ) }}" style="object-fit: contain;" width="70%">
                </center>
            </div>
        </div>
</div>

{{-- <div style="background-color: #F8F8F8"> --}}
    <div class="container container-padding" >
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="contentTitle">Project Reference List</h1>
            </div>
            <div class="hr"></div>
            
        </div>
    
        <div class="row" style="margin-top: 64px;">
            <table class="table table-striped">
                <thead style="color:#ffffff;background-color:#16a085;">
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
{{-- </div> --}}
@endsection