<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100">
    <div x-data="{ isOpen: false, isCompact: false }" class="flex h-screen">
        <!-- Sidebar Navigation -->
        <x-sidebar isOpen="isOpen" isCompact="isCompact" />
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="relative flex items-center justify-between bg-white shadow-md p-4">
                <!-- Hamburger Button for Small Screens -->
                <button @click="isOpen = !isOpen, isCompact = false"
                    class="text-gray-800 bg-gray-200 rounded-md p-2 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

                <button @click="isCompact = !isCompact"
                    class="text-gray-800 bg-gray-200 rounded-md items-center justify-center h-10 w-10 p-2 hidden md:flex">
                    <i class="fa-solid fa-bars"></i>
                </button>


                <!-- Topbar Title -->
                <div class="text-lg font-semibold text-gray-800">{{ config('app.name', 'Laravel') }} Admin</div>

                <!-- Topbar Icons (Profile, Notifications, etc.) -->
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-user-circle"></i>
                    </button>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
    @livewireScripts
</body>

</html>
