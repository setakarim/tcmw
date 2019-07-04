@extends('layouts.master')

@section('content')

<section id="page-header" class="page-section">
    <div class="container effect-loaded clearfix">
        <h1>Contact</h1>
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Contact</li>
        </ul>
    </div>
</section>

<section id="gmap" class="page-section no-padding">
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas"
                src="{{$maps}}"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a
                href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 400px;
                width: 100%;
            }

            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 400px;
                width: 100%;
            }
        </style>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="row no-padding">
            <div class="col-lg-6">
                <h3 class="heading effect-loaded">Our <strong>Address</strong></h3>
                <p>Here You Can Find Us</p>
                <ul class="effect-loaded">
                    @foreach ($contacts as $contact)
                    @if ($contact->icon == 'maps')
                        @break
                    @endif
                    <li>
                        <p><i class="fa {{ $contact->icon }}" aria-hidden="true"></i> {{ $contact->description }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <h3 class="heading effect-loaded">Contact <strong>Form</strong></h3>
                <div class="form_notification"></div>
                <form method="POST" action="/contact/sent" class="forms">
                    {{ csrf_field() }}
                    <div class="row no-padding">
                        <div class="col-lg-6 effect-loaded">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                        </div>
                        <div class="col-lg-6 effect-loaded">
                            <label for="inputEmail1">Email</label>
                            <input type="mail" class="form-control" id="inputMail" aria-describedby="emailHelp"
                                placeholder="Email" name="mail">
                        </div>
                    </div>
                    <div class="col-lg-12 effect-loaded no-padding">
                        <label for="inputSubject">Subject</label>
                        <input type="text" class="form-control" id="inputSubject" placeholder="Subject" name="subject">
                    </div>
                    <div class="col-lg-12 effect-loaded no-padding">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" value="Add">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection