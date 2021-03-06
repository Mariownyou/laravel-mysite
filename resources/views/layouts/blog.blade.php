<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Лева Кондратьев</title>
    <link rel="shortcut icon" href="/i/logo.jpg" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('js/editor.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/editor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
<div id="app" class="frame">
    @include('includes.navbar.navbar_blog')

    <div class="page-title">
        @yield('page-title')
    </div>
    <main class="margins">
        @yield('content')
    </main>

    @include('includes.footer')
</div>
@include('includes.errors')
@stack('scripts')
</body>
</html>
