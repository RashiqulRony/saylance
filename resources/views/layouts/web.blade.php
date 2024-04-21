<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <link type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" rel="icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"/>
    <title>Welcome to Saylance !</title>
    @yield('_css')
</head>
<body>
<div class="main-wrapper">
    <!--  Header  -->
    @include('web.shared.header')

    <!--  Main Content  -->
    @yield('content')

    <!--  Footer  -->
    @include('web.shared.footer')
</div>

<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
    </svg>
</div>


<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/slick.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/backToTop.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/aos.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="|49" defer></script>

<!--<script>
    onload = () => {
        var windowHeight = window.innerHeight;
        var windowWidth = window.innerWidth;

        var quarterHeight = Math.floor(windowHeight / 2);
        var quarterWidth = Math.floor(windowWidth / 2);

        var googleWindow = openWindow("http://www.google.com/", "Google", quarterWidth, quarterHeight, 0, 0);
        var w3schoolsWindow = openWindow("https://www.w3schools.com/", "W3Schools", quarterWidth, quarterHeight, quarterWidth, 0);
        var youtubeWindow = openWindow("https://www.youtube.com/", "Youtube", quarterWidth, quarterHeight, 0, quarterHeight);
        var laravelWindow = openWindow("https://www.laravel.com/", "Laravel", quarterWidth, quarterHeight, quarterWidth, quarterHeight);
    };

    function openWindow(url, title, width, height, left, top) {
        var windowFeatures = `width=${width},height=${height},top=${top},left=${left}`;
        return window.open(url, title, windowFeatures);
    }
</script>

<script>
    window.onload = () => {
        window.open("https://laravel.com");
        window.open("https://github.com/laravel/laravel");
        window.open("https://en.wikipedia.org/wiki/Laravel");
        window.open("https://laracasts.com");
    };
</script>
<script>
    document.querySelectorAll(".open-tabs").forEach((tab) =>
        tab.addEventListener("click", () => {
            window.open("https://google.com");
            window.open("https://facebook.com");
            window.open("https://youtube.com");
            window.open("https://bdjobs.com");
        })
    );
</script>-->


@stack('js')
</body>
</html>
