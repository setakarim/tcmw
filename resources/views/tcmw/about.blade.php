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
                                        <li class="nav-item">
                                                <a class="nav-link" href="#structure" data-toggle="tab">Structure Organization</a>
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
                                <div class="tab-pane" id="structure">
                                    <center>
                                        <img src="{{ Voyager::image( $structure->image ) }}" style="object-fit: center;" width="100%">
                                    </center>
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

{{-- <div style="background-color: #F8F8F8">
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
                    <h3 style="margin-bottom: 24px;">We currently focus on various areas including:</h3>
                    <ul>
                        <li>Southern Sumatera (Jambi, Lampung, Palembang, Bangka & Belitung, Bengkulu)</li>
                        <li>West Sumatera (Padang, Pekanbaru, Medan, Batam)</li>
                        <li>Jabodetabek</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div style="background-color: #F8F8F8">
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
                    {{-- <tr>
                        <td>PT. XL Axiata Tbk</td>
                        <td>Service & Replacement Air Conditioner</td>
                        <td>800 Site</td>
                        <td>Babel, South Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. XL Axiata Tbk</td>
                        <td>Overhoul Genset</td>
                        <td>450 Unit</td>
                        <td>Central Sumatra, West and South Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. XL Axiata Tbk</td>
                        <td>New Connection and Upgrade PLN</td>
                        <td>180 Site</td>
                        <td>Babel, South Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. XL Axiata Tbk</td>
                        <td>Services Trafo</td>
                        <td>100 Unit</td>
                        <td>South Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. XL Axiata Tbk</td>
                        <td>Repair Grounding</td>
                        <td>90 Site</td>
                        <td>South Sumatra, West Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. XL Axiata Tbk</td>
                        <td>Service Module Rectifier</td>
                        <td>750 Unit</td>
                        <td>Babel, Central Sumatra, North Sumatra, West Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. XL Axiata Tbk</td>
                        <td>Power Back Up Service (PBS)</td>
                        <td>550 Site</td>
                        <td>South Sumatra East, South Sumatra West, Babel</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Service & Replacement Air Conditioner</td>
                        <td>650 Site</td>
                        <td>South Sumatra East, South Sumatra West, Babel</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Supply Sparepart Genset & Electric</td>
                        <td>6500 Pcs</td>
                        <td>National</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Back Up Services & Environment (TBG Group)</td>
                        <td>700 Site</td>
                        <td>Babel, Central Sumatra, North Sumatra, West Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Overhoul and Service Genset</td>
                        <td>190 Unit</td>
                        <td>Southen Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Repair Grounding</td>
                        <td>50 Site</td>
                        <td>Southen Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Services Trafo</td>
                        <td>95 Unit</td>
                        <td>Southen Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Service Module Rectifier</td>
                        <td>600 Pcs</td>
                        <td>Babel, Central Sumatra, North Sumatra, West Sumatra</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Supply Refuel Solar</td>
                        <td>35000l/Month</td>
                        <td>Babel</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Services Maintenance Fiber Optic</td>
                        <td>3 Site</td>
                        <td>South Sumatra East, South Sumatra West</td>
                    </tr>
                    <tr>
                        <td>PT. Huawei Services</td>
                        <td>Manage Service Resources</td>
                        <td>80 Team</td>
                        <td>South Sumatra East, South Sumatra West, Babel, Jabotabek</td>
                    </tr>
                    <tr>
                        <td>PT. Hutchison 3 Indonesia</td>
                        <td>New Connection PLN, Relocation Genset, and Supply Material</td>
                        <td>20 site</td>
                        <td>South Sumatra</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection