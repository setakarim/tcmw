@extends('layouts.master')

@section('content')

<header class="masthead" style="background-image:url({{asset('img/slider6.png')}});"> </header>

<div class="container container-padding" >
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="contentTitle">Contact</h1>
        </div>
        <div class="hr"></div>
    </div>

    <div class="row" style="margin-top: 64px;">
        <div class="col-md-6" style="padding-right: 50px;">
            <h5>PT. TUNAS CAHAYA MANDIRI WIDYATAMA</h5><br>
            @foreach ($contacts as $contact)
                <p><i class="fa {{ $contact->icon }}" aria-hidden="true"></i> {{ $contact->description }}</p>
            @endforeach
        </div>
        <div class="col-md-6">
            @if (count($errors) > 0)
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif
                <form action="" class="forms">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputEmail1">Email</label>
                            <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Subject</label>
                        <input type="text" class="form-control" id="inputEmail1" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" rows="5" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
    </div>
</div>
@endsection