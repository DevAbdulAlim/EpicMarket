<x-app-layout>
    <div class="min-h-screen py-12 px-4" x-data="{ open: false }" @click.away="open = false">
        <!-- Container for user layout with centered alignment and max-width -->
        <div class="max-w-5xl mx-auto bg-white rounded-lg p-8 flex relative">

            <!-- Sidebar with user options, Off-Canvas for Small Screens -->
            <aside :class="{ 'block w-64 left-0 top-0 h-full fixed z-50': open, 'hidden': !open }"
                class="w-1/4 md:block bg-white border border-gray-200 pr-6 transition-all duration-300 ease-in-out">
                <!-- Close Button for Off-Canvas Sidebar on Small Screens -->
                <div class="md:hidden flex justify-end p-4">
                    <button @click="open = false" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-times fa-lg"></i>
                    </button>
                </div>

                <!-- Profile Section -->
                <div class="mb-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto mb-4" src="{{ asset('images/profile.png') }}"
                        alt="User Profile Image"
                        onerror="this.onerror=null; this.src='https://via.placeholder.com/150?text=Profile';">
                    <h2 class="text-lg font-semibold text-gray-800">Susan Gardner</h2>
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-4">
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Dashboard</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Orders</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Wishlist</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">My
                        Reviews</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Payment
                        Methods</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Personal
                        Info</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Address</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Notification</a>

                    <form method="POST" action="#">
                        @csrf
                        <!-- Logout Button -->
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">
                            Log out
                        </button>
                    </form>
                </nav>
            </aside>

            <!-- Main Content Area -->
            <div class="w-full md:w-3/4 md:pl-6">
                <!-- Toggle Button for Sidebar on Small Screens -->
                <div class="md:hidden mb-4 flex justify-end">
                    <button @click="open = true" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                </div>
                <div class="border border-gray-200 rounded-lg p-4 bg-white">


                    <!-- Slot for dynamic content -->
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
