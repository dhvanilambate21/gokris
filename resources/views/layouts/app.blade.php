<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- css links -->
    <link rel="stylesheet" href="resources/sass/app.scss">
    <link rel="stylesheet" href="{{ asset('/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/backend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/backend/css/style.css') }}">

</head>
<body>
    
        @include('includes.header')
        <main>
            @yield('content')
        </main>
    
    <script src="resources/js/app.js"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>

</body>
</html>
