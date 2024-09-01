<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">

            <!-- Company Information -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Company</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Careers</a></li>
                    <li><a href="#" class="hover:underline">Blog</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Customer Service</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">FAQs</a></li>
                    <li><a href="#" class="hover:underline">Returns</a></li>
                    <li><a href="#" class="hover:underline">Shipping Info</a></li>
                    <li><a href="#" class="hover:underline">Support</a></li>
                </ul>
            </div>

            <!-- Account Links -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Account</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">My Account</a></li>
                    <li><a href="#" class="hover:underline">Order History</a></li>
                    <li><a href="#" class="hover:underline">Wishlist</a></li>
                </ul>
            </div>

            <!-- Newsletter Signup -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Newsletter</h2>
                <p class="text-sm mb-4">Subscribe to our newsletter and stay updated on the latest products, deals, and
                    offers!</p>
                <form action="#" method="POST" class="flex items-center space-x-2">
                    <input type="email" name="email" placeholder="Enter your email" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Social Media and Payment Methods -->
        <div class="mt-12 border-t border-gray-700 pt-8">
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <!-- Social Media Links -->
                <div class="flex space-x-6">
                    <a href="#" class="text-white hover:text-blue-500">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="#" class="text-white hover:text-blue-500">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="#" class="text-white hover:text-blue-500">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="text-white hover:text-blue-500">
                        <i class="fab fa-linkedin fa-lg"></i>
                    </a>
                </div>

                <!-- Payment Methods -->
                <div class="mt-8 lg:mt-0 flex space-x-4">
                    <img src="https://via.placeholder.com/40x25?text=Visa" alt="Visa" class="h-6">
                    <img src="https://via.placeholder.com/40x25?text=MasterCard" alt="MasterCard" class="h-6">
                    <img src="https://via.placeholder.com/40x25?text=PayPal" alt="PayPal" class="h-6">
                    <img src="https://via.placeholder.com/40x25?text=AmEx" alt="American Express" class="h-6">
                </div>
            </div>
        </div>

        <!-- Legal and Copyright -->
        <div class="mt-8 border-t border-gray-700 pt-4">
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <div class="text-sm text-gray-400">&copy; {{ date('Y') }} Your Company. All rights reserved.</div>
                <div class="flex space-x-4 text-sm mt-4 lg:mt-0">
                    <a href="#" class="hover:underline text-gray-400">Privacy Policy</a>
                    <a href="#" class="hover:underline text-gray-400">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
