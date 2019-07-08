<footer>
    <div class="container">
        <div class="row no-padding">
            <div class="col-md-5 effect-loaded">
                <h3 class="heading">About us</h3>
                <div id="footer-about">
                    <p>{!! Str::words($about, 80, '') !!}
                        <a href="/about">{{ strlen(strip_tags($about)) > 50 ? " ...ReadMore" : "" }}</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-md-5 effect-loaded clearfix">
                <h3 class="heading">Latest News</h3>
                <ul class="latest-news">
                    @foreach($posts->reverse() as $post)
                    <li class="clearfix"> <img class="thumb" src="{{ Voyager::image( $post->image ) }}" alt="">
                        <div class="desc">
                            <a class="title" href="/news/{{ $post->slug }}">{{ $post->title }}</a>
                            <p>{!! Str::words(strip_tags($post->body), 20) !!}</p>
                            <i class="time">{{ $post->created_at->format('d M Y') }}</i>
                        </div>
                    </li>
                    @if ($loop->iteration == 2)
                    @break
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div id="footer-bottom" class="clearfix">
        <div class="container">
            <div class="row no-padding">
                <div class="col-lg-8 effect-loaded">
                    <ul class="footer-menu clearfix">
                        <li><a class="@if ( $nav == 'home' ) active @endif" href="/">Home</a></li>
                        <li><a class="@if ( $nav == 'services' ) active @endif" href="/services">Services</i></a></li>
                        <li><a class="@if ( $nav == 'about' ) active @endif" href="/about">About</a></li>
                        <li><a class="@if ( $nav == 'news' ) active @endif" href="/news">News</a></li>
                        <li><a class="@if ( $nav == 'contact' ) active @endif" href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 effect-loaded"><span id="copyright">Copyright © 2019 PT Tunas Cahaya Mandiri
                        Widyatama</span></div>
            </div>
        </div>
    </div>
</footer>