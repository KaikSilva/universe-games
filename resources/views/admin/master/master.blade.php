<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UniverseGames</title>

    <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo/universe_games__7_-removebg-preview.png') }}">
    <link href="{{ asset('backend/assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url(mix('backend/assets/css/app.css')) }}" rel="stylesheet">
    <style>
        img[alt="Logo"]{
            width: 117px;
            margin: -25px;
        }
        img.logo-fold{
            width: 34px;
            margin: 18px;
        }
    </style>
</head>

<body>

        @include('admin.includes.header')
                
            @yield('content')

        @include('admin.includes.footer')

            

    <script src="{{ url(mix('backend/assets/js/libs/libs.css')) }}"></script>
    <script src="{{ url(mix('backend/assets/js/app.js')) }}"></script>
    <script src="{{ asset('backend/assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>

<script>
    $('#data-table').DataTable();
</script>
</body>

</html>