<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>UniverseGames</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />

    <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo/universe_games__7_-removebg-preview.png') }}">

    <link rel="stylesheet" href="{{ url(mix('frontend/css/tiny-slider.css')) }}" />
    <link href="{{ url(mix('frontend/css/bootstrap.css')) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url(mix('frontend/css/style.css')) }}" rel="stylesheet" type="text/css" />



</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67">



    @include('web.includes.header')

        @yield('content')

    @include('web.includes.footer')



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/feather.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/tiny.init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="js/text-animation.init.js"></script>
    <script src="js/app.js"></script>

</body>

</html>