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
    <div x-data="{ open: false }" class="flex h-screen">
        <!-- Sidebar -->
        <div :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 bg-gray-800 text-white transform transition-transform duration-300 md:relative md:translate-x-0 md:flex md:flex-col">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between px-4 py-4 md:hidden">
                <div class="text-lg font-bold">Admin Panel</div>
                <button @click="open = false" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="flex flex-col mt-4 space-y-2">
                <a href="/admin/dashboard" class="flex items-center px-4 py-2 text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-chart-line mr-2"></i> Dashboard
                </a>
                <a href="/admin/categories" class="flex items-center px-4 py-2 text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-list mr-2"></i> Categories
                </a>
                <a href="/admin/users" class="flex items-center px-4 py-2 text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-users mr-2"></i> Users
                </a>
                <a href="/admin/settings" class="flex items-center px-4 py-2 text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-cogs mr-2"></i> Settings
                </a>
                <a href="/admin/reports" class="flex items-center px-4 py-2 text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-chart-bar mr-2"></i> Reports
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="flex items-center justify-between bg-white shadow-md p-4">
                <!-- Hamburger Button for Small Screens -->
                <button @click="open = !open" class="text-gray-800 bg-gray-200 rounded-md p-2 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
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
            <main class="flex-1 p-6 bg-gray-100">
                {{ $slot }}
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>
