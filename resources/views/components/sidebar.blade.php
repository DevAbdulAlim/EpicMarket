@props([
    'isOpen' => false,
    'isCompact' => false,
])

<div x-data="{ $isOpen: {{ $isOpen ? 'true' : 'false' }}, $isCompact }" :class="{ '-translate-x-full md:translate-x-0': !isOpen, 'translate-x-0': isOpen }"
    class="fixed inset-y-0 left-0 z-30 transition-all duration-500 ease-in-out  -translate-x-full md:relative md:translate-x-0">

    <div class="relative h-full w-screen md:w-full">
        <div @click="isOpen = false" class="absolute w-full h-full"></div>

        <!-- Sidebar Content Area with Compact and Expanded States -->
        <div class="relative h-full overflow-auto bg-gray-600 text-white  flex-1 w-64 transition-all duration-500 ease-in-out"
            :class="{ 'w-10': isCompact, 'w-64': !isCompact, }">
            <!-- Sidebar Header -->
            <div class="sticky top-0 flex items-center bg-gray-700 z-10 border-b justify-between">
                <div :class="{ 'hidden': isCompact }" class="text-lg p-2 font-bold whitespace-nowrap">Admin Panel
                </div>
                <div x-show="isCompact" x-cloak class="text-lg font-bold p-2 hidden md:block">AP</div>
                <button @click="isOpen = false"
                    class="text-primary rounded-full p-2 m-2 bg-light focus:outline-none md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Sidebar items -->
            <nav class="flex flex-col mt-4 space-y-2 mb-4">
                <!-- Dashboard Section -->
                <a href="/admin/dashboard"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-gray-700">
                    <i class="fas fa-chart-line"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Dashboard</span>
                </a>

                <!-- Catalog Section -->
                <a href="/admin/catalog"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-gray-700">
                    <i class="fas fa-list"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Catalog</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="/admin/categories" class=" text-white hover:text-primary">Categories</a></li>
                    <li><a href="/admin/products" class=" text-white hover:text-primary">Products</a></li>
                    <li><a href="/admin/brands" class=" text-white hover:text-primary">Brands</a></li>
                    <li><a href="/admin/tags" class=" text-white hover:text-primary">Tags</a></li>
                    <li><a href="/admin/attributes" class=" text-white hover:text-primary">Attributes</a></li>
                </ul>

                <!-- Sales Section -->
                <a href="/admin/sales"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-gray-700">
                    <i class="fas fa-shopping-cart"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Sales</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="/admin/orders" class=" text-white hover:text-primary">Orders</a></li>
                    <li><a href="/admin/returns" class=" text-white hover:text-primary">Returns</a></li>
                    <li><a href="/admin/transactions" class=" text-white hover:text-primary">Transactions</a>
                    </li>
                    <li><a href="/admin/invoices" class=" text-white hover:text-primary">Invoices</a></li>
                    <li><a href="/admin/quotes" class=" text-white hover:text-primary">Quotes</a></li>
                    <li><a href="/admin/abandoned-carts" class=" text-white hover:text-primary">Abandoned
                            Carts</a></li>
                </ul>

                <!-- Marketing Section -->
                <a href="/admin/marketing"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-gray-700">
                    <i class="fas fa-bullhorn"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Marketing</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="/admin/coupons" class=" text-white hover:text-primary">Coupons</a></li>
                    <li><a href="/admin/discounts" class=" text-white hover:text-primary">Discounts</a></li>
                    <li><a href="/admin/email-campaigns" class=" text-white hover:text-primary">Email
                            Campaigns</a></li>
                    <li><a href="/admin/affiliate-programs" class=" text-white hover:text-primary">Affiliate
                            Programs</a></li>
                    <li><a href="/admin/loyalty-programs" class=" text-white hover:text-primary">Loyalty
                            Programs</a></li>
                    <li><a href="/admin/promotions" class=" text-white hover:text-primary">Promotions</a></li>
                </ul>

                <!-- Engagement Section -->
                <a href="/admin/engagements"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-gray-700">
                    <i class="fas fa-users"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Engagements</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="/admin/customers" class=" text-white hover:text-primary">Customers</a></li>
                    <li><a href="/admin/reviews" class=" text-white hover:text-primary">Reviews</a></li>
                    <li><a href="/admin/surveys" class=" text-white hover:text-primary">Surveys</a></li>
                    <li><a href="/admin/community-forums" class=" text-white hover:text-primary">Community
                            Forums</a></li>
                    <li><a href="/admin/chat-support" class=" text-white hover:text-primary">Chat & Support</a>
                    </li>
                    <li><a href="/admin/wishlists" class=" text-white hover:text-primary">Wishlists</a></li>
                </ul>

                <!-- Settings Section -->
                <a href="/admin/settings"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-gray-700">
                    <i class="fas fa-cogs"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Settings</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="/admin/general" class=" text-white hover:text-primary">General</a></li>
                    <li><a href="/admin/business" class=" text-white hover:text-primary">Business</a></li>
                    <li><a href="/admin/site" class=" text-white hover:text-primary">Site</a></li>
                    <li><a href="/admin/shipping" class=" text-white hover:text-primary">Shipping</a></li>
                    <li><a href="/admin/payment" class=" text-white hover:text-primary">Payment</a></li>
                    <li><a href="/admin/tax" class=" text-white hover:text-primary">Tax</a></li>
                    <li><a href="/admin/advanced" class=" text-white hover:text-primary">Advanced</a></li>
                    <li><a href="/admin/security" class=" text-white hover:text-primary">Security</a></li>
                    <li><a href="/admin/notifications" class=" text-white hover:text-primary">Notifications</a>
                    </li>
                    <li><a href="/admin/integrations" class=" text-white hover:text-primary">Integrations</a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>

</div>
