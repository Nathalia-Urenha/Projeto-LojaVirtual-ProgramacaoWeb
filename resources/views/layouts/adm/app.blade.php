<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ asset('lib/bootstrap/css/main.css') }}" rel="stylesheet">

    <link href="{{ asset('lib/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/fontawesome/css/font-awesome.css') }}" rel="stylesheet">

</head>
<body class="app sidebar-mini rtl">
    
    <header>
        @include('layouts.adm.header')
    </header>

    <aside>
        @include('layouts.adm.sidebar')
    </aside>

    <main class="app-content">
        @yield('content')
    </main>

    <script src="{{ asset('lib/bootstrap/js/jquery-3.3.1.min.js') }}" ></script>
    <script src="{{ asset('lib/bootstrap/js/main.js') }}" ></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('lib/bootstrap/js/popper.min.js') }}" ></script>

    @yield('javascript')

</body>
</html>
