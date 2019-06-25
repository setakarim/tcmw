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
            <form method="POST" action="/contact/sent" class="forms">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="inputEmail1">Email</label>
                        <input type="mail" class="form-control" id="inputMail" aria-describedby="emailHelp" placeholder="Email" name="mail">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSubject">Subject</label>
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-success" value="Add">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection