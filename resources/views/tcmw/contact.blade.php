@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/slider6.jpg')}});"> </header>

<div class="container container-padding" >
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">Contact</h1>
        </div>
        <div class="hr"></div>
    </div>

    <div class="row" style="margin-top: 64px;">
        <div class="col-md-6" style="padding-right: 50px;">
            <h6><b>PT. TUNAS CAHAYA MANDIRI WIDYATAMA</b></h6>
            <p>Unnamed Road, Ilir Tim. II, 30961, 8 Ilir, Ilir Timur II, Palembang City, South Sumatra 30961</p>
            <i class="fas fa-phone"><span> (+6231) 5996007-9</span></i> <br>
            <i class="far fa-envelope"><span> info@karuniaindah.net</span></i> 
        </div>
        <div class="col-md-6">
                <form>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSubject">Subject</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMessage">Message</label>
                        <textarea class="form-control" rows="5" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    </div>
</div>
@endsection