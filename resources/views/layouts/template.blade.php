<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('page-title', 'My Laravel Project')</title>        
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('main-content')
        </main>
        @include('partials.footer')
    </body>
</html>
