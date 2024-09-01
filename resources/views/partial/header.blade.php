<header>
    <nav class="bg-white border-b border-gray-200 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Brand Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <div class="h-8 w-24 flex items-center justify-center">
                            <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo"
                                onerror="this.onerror=null; this.src='https://via.placeholder.com/150?text=Logo';">
                        </div>
                    </a>
                </div>

                <!-- Links, Search Bar, and User Options -->
                <div class="hidden md:flex items-center justify-between w-full">
                    <!-- Navigation Links -->
                    <div class="flex space-x-4">
                        <a href="{{ route('products.index') }}"
                            class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Shop</a>
                        <a href="{{ route('products.index') }}"
                            class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Categories</a>
                    </div>

                    <!-- Search Bar -->
                    <div class="flex items-center w-1/2">
                        <input type="text"
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="Search products...">
                        <button type="submit"
                            class="ml-2 px-3 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            Search
                        </button>
                    </div>

                    <!-- User Options -->
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('cart.index') }}" class="relative text-gray-700 hover:text-blue-500">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                            <span class="absolute top-0 right-0 inline-block w-3 h-3 bg-red-500 rounded-full"></span>
                        </a>

                        <a href="{{ route('wishlist.index') }}" class="relative text-gray-700 hover:text-blue-500">
                            <i class="fas fa-heart fa-lg"></i>
                            <span class="absolute top-0 right-0 inline-block w-3 h-3 bg-red-500 rounded-full"></span>
                        </a>

                        @guest
                            <a href="{{ route('login') }}"
                                class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                            <a href="{{ route('register') }}"
                                class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                        @else
                            <div class="relative">
                                <button type="button" class="text-gray-700 hover:text-blue-500 flex items-center">
                                    <i class="fas fa-user fa-lg"></i>
                                </button>
                                <div
                                    class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg py-1 z-50">
                                    <a href="{{ route('user.profile') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button"
                        class="bg-gray-100 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                        aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu icon -->
                        <i class="fas fa-bars"></i>
                        <!-- Close icon -->
                        <i class="hidden fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('products.index') }}"
                    class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Shop</a>
                <a href="{{ route('products.index') }}"
                    class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Categories</a>
            </div>
            <!-- Mobile User Options -->
            <div class="px-2 pt-2 pb-3 space-y-1 border-t border-gray-200">
                <a href="{{ route('cart.index') }}"
                    class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Cart</a>
                <a href="{{ route('wishlist.index') }}"
                    class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Wishlist</a>
                @guest
                    <a href="{{ route('login') }}"
                        class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Login</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Register</a>
                @else
                    <a href="{{ route('user.profile') }}"
                        class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="block">
                        @csrf
                        <button type="submit"
                            class="w-full text-left text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-base font-medium">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>
</header>
