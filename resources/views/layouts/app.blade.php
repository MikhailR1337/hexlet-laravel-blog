<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div>
            <a
                href="{{ route('welcome') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
            >
                Welcome
            </a>
            <a
                href="{{ route('about') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
            >
                About
            </a>
            <a
                href="{{ route('articles.index') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
            >
                Articles
            </a>
        <div>
        <div class="container mt-4">
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>