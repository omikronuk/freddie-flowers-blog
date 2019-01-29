<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="content" content="Site Description Here">
    <link href="http://playground.kawisoft.com/stack2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://playground.kawisoft.com/stack2/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://playground.kawisoft.com/stack2/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://playground.kawisoft.com/stack2/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://playground.kawisoft.com/stack2/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://playground.kawisoft.com/stack2/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://playground.kawisoft.com/stack2/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://playground.kawisoft.com/stack2/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://playground.kawisoft.com/stack2/css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'user' => Auth::user()
      ]) !!};
    </script>

</head>
<body class=" ">
<a id="start"></a>
<div id="app">
<div class="col-lg-6 text-right text-left-xs text-left-sm">
    <div class="bar__module">
        <ul class="menu-horizontal">
            @auth()
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Welcome {{ Auth::user()->name }}, <span class="caret"></span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</div>
<div class="nav-container ">
    <div class="bar bar--sm visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-2">
                    <a href="/admin">
                        <img class="logo logo-dark" alt="logo" src="https://www.freddiesflowers.com/images/freddies_flowers_logo.svg?87f5b2951870624bab59e5a40dfd5f30" />
                        <img class="logo logo-light" alt="logo" src="https://www.freddiesflowers.com/images/freddies_flowers_logo.svg?87f5b2951870624bab59e5a40dfd5f30" />
                    </a>
                </div>
                <div class="col-9 col-md-10 text-right">
                    <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                        <i class="icon icon--sm stack-interface stack-menu"></i>
                    </a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </div>
    <!--end bar-->
    <nav id="menu1" class="bar bar--sm bar-1 hidden-xs ">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-2 hidden-xs">
                    <div class="bar__module">
                        <a href="/">
                            <img class="logo logo-dark" alt="logo" src="https://www.freddiesflowers.com/images/freddies_flowers_logo.svg?87f5b2951870624bab59e5a40dfd5f30" />
                            <img class="logo logo-light" alt="logo" src="https://www.freddiesflowers.com/images/freddies_flowers_logo.svg?87f5b2951870624bab59e5a40dfd5f30" />
                        </a>
                    </div>
                    <!--end module-->
                </div>

                <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                    <div class="bar__module">
                        <a href="/admin" class="padding-10 type--uppercase">View All</a>
                        <a class="btn btn--sm type--uppercase" href="/post/create">
                            <span class="btn__text"> Create Post  </span>
                        </a>
                    </div>
                    <!--end module-->

                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </nav>
    <!--end bar-->
</div>
<div class="main-container">

    @yield('content')

    <footer class="footer-3 text-center-xs space--xs ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline list--hover">
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="type--fine-print">Get Started</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="type--fine-print">help@stack.io</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-right text-center-xs">
                    <ul class="social-list list-inline list--hover">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="socicon socicon-google icon icon--xs"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="socicon socicon-twitter icon icon--xs"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="socicon socicon-facebook icon icon--xs"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="socicon socicon-instagram icon icon--xs"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-6">
                    <p class="type--fine-print">
                        Supercharge your web workflow
                    </p>
                </div>
                <div class="col-md-6 text-right text-center-xs">
                <span class="type--fine-print">&copy;
                    <span class="update-year"></span> Freddie Flowers Blog</span>
                    <a class="type--fine-print" href="#">Privacy Policy</a>
                    <a class="type--fine-print" href="#">Legal</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </footer>
</div>
<!--<div class="loader"></div>-->
</div>
<a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
    <i class="stack-interface stack-up-open-big"></i>
</a>
<script src="http://playground.kawisoft.com/stack2/js/jquery-3.1.1.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/flickity.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/easypiechart.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/parallax.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/typed.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/datepicker.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/isotope.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/ytplayer.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/lightbox.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/granim.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/jquery.steps.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/countdown.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/twitterfetcher.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/spectragram.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/smooth-scroll.min.js"></script>
<script src="http://playground.kawisoft.com/stack2/js/scripts.js"></script>
</body>
</html>
