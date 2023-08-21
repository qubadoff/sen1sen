<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>
        @yield('pageTitle')
    </title>

    <!-- Style CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" >
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin >
    <link
        rel="shortcut icon"
        href="{{ url('/') }}/assets/images/favicon.png"
        type="image/png"
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&amp;display=swap"
        rel="stylesheet"
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&amp;display=swap"
        rel="stylesheet"
    >
    <link
        rel="stylesheet"
        href="{{ url('/') }}/assets/libs/line-awesome/css/line-awesome.min.css"
    >
    <link
        rel="stylesheet"
        href="{{ url('/') }}/assets/libs/bootstrap/css/bootstrap.min.css"
    >
    <link
        rel="stylesheet"
        href="{{ url('/') }}/assets/libs/swiper/swiper-bundle.min.css"
    >
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css" >
</head>
<body>
<div id="wrapper">
    <div id="preload" class="preload"><div class="spin"></div></div>

    @include('Frontend.Layouts.inc.header')
    @yield('content')
    @include('Frontend.Layouts.inc.footer')

    <!-- BEGIN BACK TO TOP -->
    <a href="#" id="backtotop" class="backtotop">
        <svg
            width="28"
            height="28"
            viewBox="0 0 28 28"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M5.52344 18.5234C5.3151 18.3151 5.3151 18.0938 5.52344 17.8594L13.7266 9.69531C13.9349 9.46094 14.1432 9.46094 14.3516 9.69531L22.5547 17.8594C22.763 18.0938 22.763 18.3151 22.5547 18.5234L21.7734 19.3047C21.5651 19.5391 21.3438 19.5391 21.1094 19.3047L14.0391 12.2344L6.96875 19.3047C6.73438 19.5391 6.51302 19.5391 6.30469 19.3047L5.52344 18.5234Z"
                fill="#ffffff"
            ></path>
        </svg>
    </a>
    <!-- END BACK TO TOP -->

    <!-- BEGIN SWITCHER -->
    <div class="dl-switcher">
        <div class="item">
            <span class="state dark" data-text="Dark">Dark</span>
            <span class="state light" data-text="Light">Light</span>
        </div>
        <div class="toddler">Light</div>
    </div>
    <!-- END SWITCHER -->
</div>

<!-- jQuery -->
<script src="{{ url('/') }}/assets/js/jquery-1.12.4.js"></script>
<script src="{{ url('/') }}/assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/libs/swiper/swiper-bundle.min.js"></script>
<script src="{{ url('/') }}/assets/libs/waypoints/jquery.waypoints.min.js"></script>
<script src="{{ url('/') }}/assets/libs/counter/jquery.counterup.min.js"></script>
<script src="{{ url('/') }}/assets/libs/wowjs/wow.min.js"></script>
<script src="{{ url('/') }}/assets/js/main.js"></script>
</body>
</html>
