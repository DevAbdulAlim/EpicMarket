<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <div class="flex max-w-7xl mx-auto px-4  py-12 flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="bg-green-100 text-gray-800 w-full md:w-64 flex-shrink-0">
            <div class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('user.dashboard') }}"
                           class="block py-2 px-4 rounded
                                  {{ request()->routeIs('user.dashboard') ? 'bg-green-700 text-white' : 'hover:bg-green-200 ' }}">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.orders') }}"
                           class="block py-2 px-4 rounded
                                  {{ request()->routeIs('user.orders') ? 'bg-green-700 text-white' : 'hover:bg-green-200 ' }}">
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.show') }}"
                           class="block py-2 px-4 rounded
                                  {{ request()->routeIs('profile.show') ? 'bg-green-700 text-white' : 'hover:bg-green-200 ' }}">
                            Profile
                        </a>
                    </li>
                    <!-- Authentication -->
                    <hr>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </ul>

            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-4 md:p-8">

                <!-- Child Content Placeholder -->
                {{ $slot }}

        </div>
    </div>

</x-app-layout>
