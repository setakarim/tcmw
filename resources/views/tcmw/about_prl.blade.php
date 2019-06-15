@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/bg2.jpg')}});"> </header>

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
                        <tr>
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
                        </tr>
                       
                    </tbody>
                  </table>
    </div>
</div>

@endsection