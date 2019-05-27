<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tunas Cahaya Mandiri Widyatama</title>
    
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom navbar-light fixed-top shadow">
        <div class="container" style="padding: 12px;">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo.png')}}" class="navbar-brand-img">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        @if ( $nav == 'home' )
                        <div class="active">
                        @endif
                            <a class="nav-link" href="/">Home
                                @if ( $nav == 'home' ) <span class="sr-only">(current)</span> @endif
                            </a>
                        @if ( $nav == 'home' )
                        </div>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if ( $nav == 'services' )
                        <div class="active">
                        @endif
                            <a class="nav-link" href="/services">Services
                                @if ( $nav == 'services' ) <span class="sr-only">(current)</span> @endif
                            </a>
                        @if ( $nav == 'services' )
                        </div>
                        @endif
                    </li>
                    <li class="nav-item">
                            @if ( $nav == 'about' )
                            <div class="active">
                            @endif
                                <a class="nav-link" href="/about">About
                                    @if ( $nav == 'about' ) <span class="sr-only">(current)</span> @endif
                                </a>
                            @if ( $nav == 'about' )
                            </div>
                            @endif
                        </li>
                    <li class="nav-item">
                        @if ( $nav == 'contact' )
                        <div class="active">
                        @endif
                            <a class="nav-link" href="/contact">Contact
                                @if ( $nav == 'contact' ) <span class="sr-only">(current)</span> @endif
                            </a>
                        @if ( $nav == 'contact' )
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!----------- Footer ------------>
    <footer>
        <div class="footer-bs">
            <div class="row">
                <div class="col-md-6 footer-brand animated fadeInLeft">
                    <h4>PT. Tunas Cahaya Mandiri Widyatama</h4>
                    <p>Founded in February, 11’ 2008, as a company that have a specializing on the Supply Spare part, Service and Maintenance Equipment in telecommunication sector.</p>
                    <p>Our Vision to be a reliable partner in all areas of telecommunications. In addition to support it we also have a reliable human resources team, an  professionals engineer who can provide the best services in all area that we serve.</p>
                    <p>World Telecom is a competitive world, where any delay would result in losses for the company. Therefore we always do a perfect job with the preparation and structural operating system so that it can be completed in a timely manner.</p>
                </div>
                <div class="col-md-6 footer-nav animated fadeInUp">
                    <h2>Latest News</h2>
                    <ul class="pages">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Explores</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-footer navbar-light" style="background-color: #222f3e;">
            <div class="container">
                <a class="navbar-brand" href="">©2019 - PT Tunas Cahaya Mandiri Widyatama</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            @if ( $nav != 'home' )
                            <div class="active">
                            @endif
                                <a class="nav-link" href="/">Home
                                    @if ( $nav != 'home' ) <span class="sr-only">(current)</span> @endif
                                </a>
                            @if ( $nav != 'home' )
                            </div>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ( $nav != 'services' )
                            <div class="active">
                            @endif
                                <a class="nav-link" href="/services">Services
                                    @if ( $nav != 'services' ) <span class="sr-only">(current)</span> @endif
                                </a>
                            @if ( $nav != 'services' )
                            </div>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ( $nav != 'about' )
                            <div class="active">
                            @endif
                                <a class="nav-link" href="/about">About
                                    @if ( $nav != 'about' ) <span class="sr-only">(current)</span> @endif
                                </a>
                            @if ( $nav != 'about' )
                            </div>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ( $nav != 'contact' )
                            <div class="active">
                            @endif
                                <a class="nav-link" href="/contact">Contact
                                    @if ( $nav != 'contact' ) <span class="sr-only">(current)</span> @endif
                                </a>
                            @if ( $nav != 'contact' )
                            </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>