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
    <nav class="navbar navbar-expand-lg navbar-custom navbar-light @if ( $nav != 'services' ) fixed-top @endif shadow" >
        <div class="container" style="padding: 8px;">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo.png')}}" class="navbar-brand-img">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" >
                <ul class="navbar-nav ml-auto" >
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
                    
                    <li class="nav-item dropdown">
                        @if ( $nav == 'about' )
                        <div class="active">
                        @endif
                            <a href="#" class="nav-link" data-toggle="dropdown">About <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-content">
                                <a href="/about">About Us</a>
                                <a href="/about_structure">Structure Organization</a>
                                <a href="/about_rpl">Project Reference List</a>
                            </div>

                                {{-- <a class="nav-link" href="/about">About
                                    @if ( $nav == 'about' ) <span class="sr-only">(current)</span> @endif
                                </a> --}}
                        @if ( $nav == 'about' )
                        </div>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if ( $nav == 'news' )
                        <div class="active">
                        @endif
                            <a class="nav-link" href="/news">News
                                @if ( $nav == 'news' ) <span class="sr-only">(current)</span> @endif
                            </a>
                        @if ( $nav == 'news' )
                        </div>
                        @endif
                    </li>
                    {{-- <li class="nav-item">
                        @if ( $nav == 'contact' )
                        <div class="active">
                        @endif
                            <a class="nav-link" href="/contact">Contact
                                @if ( $nav == 'contact' ) <span class="sr-only">(current)</span> @endif
                            </a>
                        @if ( $nav == 'contact' )
                        </div>
                        @endif
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!----------- Footer ------------>
    <footer>
        <div class="footer-bs">
            <div class="row">
                <div class="col-md-4 footer-brand animated fadeInLeft">
                    <h4>About Us</h4>
                    <p>{!! substr(strip_tags($about), 0, 400) !!}
                        <a href="/about">{{ strlen(strip_tags($about)) > 50 ? "  ...ReadMore" : "" }}</a>
                    </p>
                </div>
                <div class="col-md-8 footer-nav animated fadeInUp">
                    <h3>Latest News</h3>
                    <div class="pages">
                        <div class="row">
                        @foreach($posts->reverse() as $post)
                            <div class="col-md-6 news" >                 
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ Voyager::image( $post->image ) }}">
                                    </div>
                                    <div class="col-8">
                                        <a href="/news/{{ $post->slug }}">{{ $post->title }}</a>
                                        <p>{{ str_limit(strip_tags($post->body), 80) }}</p>
                                    </div>
                                </div>
                            </div>
                            @if ($loop->iteration == 2)
                                @break
                            @endif
                        @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-footer navbar-light" style="background-color: #222f3e;">
            <div class="container">
                <a class="navbar-brand mr-auto ml-auto" href="/">©2019 - PT Tunas Cahaya Mandiri Widyatama</a>
            </div>
        </nav>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/js_app.js') }}"></script>

</html>