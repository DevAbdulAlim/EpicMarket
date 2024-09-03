<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Documentation' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Topbar -->
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
                <h1 class="text-xl font-bold">{{ $title ?? 'Documentation' }}</h1>
                <div>
                    <!-- Add breadcrumb or user menu here -->
                    <nav>
                        <ul class="flex space-x-4">
                            <li><a href="#" class="text-gray-600 hover:text-gray-800">Home</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-800">Docs</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-800">API</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="flex flex-1">
            <!-- Sidebar -->
            <aside class="w-64 bg-white shadow-md flex-shrink-0">
                <div class="p-4">
                    <nav class="space-y-2">
                        <a href="#"
                            class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-800">Introduction</a>
                        <a href="#"
                            class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-800">Installation</a>
                        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-800">Components</a>
                        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-800">Layouts</a>
                        <a href="#"
                            class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-800">Customization</a>
                    </nav>
                </div>
            </aside>

            <!-- Content Area -->
            <main class="flex-1 p-8 bg-white overflow-y-auto">
                {{ $slot }}
            </main>
        </div>
    </div>
    @livewireScripts
</body>

</html>
