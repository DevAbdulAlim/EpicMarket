<header class="sticky top-0 z-10 bg-white shadow-md">
    <!-- Desktop Header -->
    <div class="hidden md:block border-b border-gray-200">
        <!-- First Row: Logo, Search, Theme Changer, Account, Wishlist, Cart -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo"
                        onerror="this.onerror=null; this.src='https://via.placeholder.com/150?text=Logo';">
                </a>
            </div>

            <!-- Search Bar -->
            <div class="flex-grow mx-4">
                <input type="text"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Search products...">
            </div>

            <!-- Icons: Theme Changer, Account, Wishlist, Cart -->
            <div class="flex items-center space-x-4">
                <!-- Theme Changer Icon -->
                <button class="text-gray-700 hover:text-blue-500">
                    <i class="fas fa-adjust fa-lg"></i>
                </button>
                <!-- Account Icon -->
                <a href="{{ route('user.profile') }}" class="text-gray-700 hover:text-blue-500">
                    <i class="fas fa-user fa-lg"></i>
                </a>
                <!-- Wishlist Icon -->
                <a href="" class="relative text-gray-700 hover:text-blue-500">
                    <i class="fas fa-heart fa-lg"></i>
                    <span class="absolute top-0 right-0 inline-block w-3 h-3 bg-red-500 rounded-full"></span>
                </a>
                <!-- Cart Icon -->
                <x-cart />
            </div>
        </div>

        <!-- Second Row: Category Dropdown, Static Links, Language and Currency Selectors -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-12">
            <!-- Category Dropdown Button -->
            <div>
                <button class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">
                    Categories
                </button>
            </div>

            <!-- Static Page Links -->
            <div class="flex space-x-4">
                <a href="" class="text-gray-700 hover:text-blue-500 text-sm font-medium">About Us</a>
                <a href="" class="text-gray-700 hover:text-blue-500 text-sm font-medium">Contact</a>
                <a href="" class="text-gray-700 hover:text-blue-500 text-sm font-medium">FAQ</a>
            </div>

            <!-- Language and Currency Selector Icons -->
            <div class="flex items-center space-x-4">
                <button class="text-gray-700 hover:text-blue-500">
                    <i class="fas fa-globe fa-lg"></i>
                </button>
                <button class="text-gray-700 hover:text-blue-500">
                    <i class="fas fa-dollar-sign fa-lg"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="md:hidden border-b border-gray-200">
        <!-- Top Menu: Logo, Language Selector, Currency Selector -->
        <div class="flex justify-between items-center h-12 px-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo"
                        onerror="this.onerror=null; this.src='https://via.placeholder.com/150?text=Logo';">
                </a>
            </div>
            <!-- Language and Currency Selector Icons -->
            <div class="flex items-center space-x-4">
                <button class="text-gray-700 hover:text-blue-500">
                    <i class="fas fa-globe fa-lg"></i>
                </button>
                <button class="text-gray-700 hover:text-blue-500">
                    <i class="fas fa-dollar-sign fa-lg"></i>
                </button>
            </div>
        </div>

        <!-- Second Row: Search Bar, Wishlist Icon -->
        <div class="flex justify-between items-center px-4 py-2">
            <!-- Search Bar -->
            <div class="flex-grow mr-4">
                <input type="text"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Search products...">
            </div>
            <!-- Wishlist Icon -->
            <a href="" class="text-gray-700 hover:text-blue-500">
                <i class="fas fa-heart fa-lg"></i>
                <span class="absolute top-0 right-0 inline-block w-3 h-3 bg-red-500 rounded-full"></span>
            </a>
        </div>
    </div>

    <!-- Mobile Bottom Navigation -->
    <nav class="fixed bottom-0 inset-x-0 bg-white border-t border-gray-200 shadow-lg md:hidden">
        <div class="flex justify-around py-2">
            <a href="{{ route('home') }}" class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                <i class="fas fa-home fa-lg"></i>
                <span class="text-xs">Home</span>
            </a>
            <a href="{{ route('products.index') }}"
                class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                <i class="fas fa-th-large fa-lg"></i>
                <span class="text-xs">Categories</span>
            </a>
            <a href="{{ route('cart.index') }}" class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                <i class="fas fa-shopping-cart fa-lg"></i>
                <span class="text-xs">Cart</span>
            </a>
            <a href="{{ route('user.profile') }}" class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                <i class="fas fa-user fa-lg"></i>
                <span class="text-xs">Account</span>
            </a>
        </div>
    </nav>
</header>
