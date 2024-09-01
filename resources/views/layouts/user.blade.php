<x-app-layout>
    <div class="min-h-screen py-12 px-5">
        <!-- Container for user layout with centered alignment and max-width -->
        <div class="max-w-5xl mx-auto bg-white rounded-lg p-8 flex">

            <!-- Sidebar with user options -->
            <aside class="w-1/4 border-r border-gray-200 pr-6">
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-gray-800">Susan Gardner</h2>
                    <p class="text-sm text-gray-500">100 bonuses available</p>
                </div>
                <nav class="space-y-4">
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Orders</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Wishlist</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Payment
                        Methods</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">My
                        Reviews</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Manage
                        Account</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Personal
                        Info</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Addresses</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Notifications</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Customer
                        Service</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Help
                        Center</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-200 rounded">Terms and
                        Conditions</a>
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
            <div class="w-3/4 pl-6">
                <div class="border border-gray-200 rounded-lg p-6 bg-white">
                    <!-- Slot for dynamic content -->
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
