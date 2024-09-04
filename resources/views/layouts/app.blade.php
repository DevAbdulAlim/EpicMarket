<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="flex flex-col min-h-screen">
    @include('layouts.partial.header')
    <main class="flex-grow">
        {{ $slot }}
    </main>
    @include('layouts.partial.footer')
    @livewireScripts
</body>

</html>
