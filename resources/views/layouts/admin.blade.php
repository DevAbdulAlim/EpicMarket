<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body x-data="{ isOpen: false, isCompact: false }" class="flex flex-col min-h-screen overflow-x-hidden" x-cloak>
    {{-- Screen Loader --}}
    <x-spinner />

    <!-- Sidebar Navigation -->
    <x-sidebar isOpen="isOpen" isCompact="isCompact" />

    <!-- Topbar -->
    @include('layouts.partial.admin-topbar')

    <!-- Main Content Area -->
    <main :class="{ 'md:ml-10': isCompact, 'md:ml-64': !isCompact }"
        class="flex-1 p-6 md:ml-64 transition-all duration-500 ease-in-out">
        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>
