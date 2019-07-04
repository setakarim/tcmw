<header id="header-5">
        <div class="container clearfix">
            <div class="aveta-logo"><a href="#"><img src="{{asset('img/logo.png')}}" height="70px" alt="TCMW Logo" /></a>
            </div>
            <nav id="navigation">
                <div class="header-info clearfix">
                    <span><i class="icon-home"></i> Address: Klampis Madya Raya 1</span>
                    <span><i class="icon-mail-forward"></i>info@karuniaindah.net</span>
                </div>
    
                <ul class="menu-lamp hidden-phone clearfix" id="menu-lamp">
                    <li>
                        <a class="@if ( $nav == 'home' ) active @endif" href="/">Home</a>
                    </li>
                    <li><a class="@if ( $nav == 'services' ) active @endif" href="/services">Services <i class="icon-caret-down"></i></a>
                        <ul class="submenu">
                            @foreach ($services as $service)
                                <li><a href="/services/{{$service->id}}">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="@if ( $nav == 'about' ) active @endif" href="/about">About</a></li>
                    <li><a class="@if ( $nav == 'news' ) active @endif" href="/news">News</a></li>
                    <li><a class="@if ( $nav == 'contact' ) active @endif" href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>