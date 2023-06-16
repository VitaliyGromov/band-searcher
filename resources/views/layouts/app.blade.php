<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @livewireStyles

    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">
        @include('include.header')
        <main class="py-4">
            @yield('content')
        </main>
        @include('include.footer')
    </div>
</body>

@livewireScripts
</html>
