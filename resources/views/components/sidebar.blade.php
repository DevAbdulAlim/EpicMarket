@props([
    'isOpen' => false,
    'isCompact' => false,
])

<div x-data="{ $isOpen: {{ $isOpen ? 'true' : 'false' }}, $isCompact }" :class="{ '-translate-x-full md:translate-x-0': !isOpen, 'translate-x-0': isOpen }"
    class="fixed inset-y-0 left-0 z-30 transition-all duration-500 ease-in-out  -translate-x-full md:translate-x-0">

    <div class="relative h-full w-screen md:w-full">
        <div @click="isOpen = false" class="absolute w-full h-full"></div>

        <!-- Sidebar Content Area with Compact and Expanded States -->
        <div class="relative h-full overflow-y-auto overflow-x-hidden scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-gray-200 bg-primary text-white  flex-1 w-64 transition-all duration-500 ease-in-out"
            :class="{ 'w-10': isCompact, 'w-64': !isCompact, }">
            <!-- Sidebar Header -->
            <div class="sticky top-0 flex items-center bg-primary z-10 border-b justify-between">
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
                <a href="{{ route('admin.index') }}"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-parimary/10">
                    <i class="fas fa-chart-line"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Dashboard</span>
                </a>

                <!-- Catalog Section -->
                <a href="{{ route('admin.catalog.index') }}"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-parimary/10">
                    <i class="fas fa-list"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Catalog</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="{{ route('admin.catalog.categories.index') }}"
                            class=" text-white hover:text-secondary">Categories</a></li>
                    <li><a href="{{ route('admin.catalog.products.index') }}"
                            class=" text-white hover:text-secondary">Products</a></li>
                    <li><a href="/admin/brands" class=" text-white hover:text-secondary">Brands</a></li>
                    <li><a href="/admin/tags" class=" text-white hover:text-secondary">Tags</a></li>
                    <li><a href="/admin/attributes" class=" text-white hover:text-secondary">Attributes</a></li>
                </ul>

                <!-- Sales Section -->
                <a href="{{ route('admin.sales.index') }}"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-parimary/10">
                    <i class="fas fa-shopping-cart"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Sales</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="/admin/orders" class=" text-white hover:text-secondary">Orders</a></li>
                    <li><a href="/admin/returns" class=" text-white hover:text-secondary">Returns</a></li>
                    <li><a href="/admin/transactions" class=" text-white hover:text-secondary">Transactions</a>
                    </li>
                    <li><a href="/admin/invoices" class=" text-white hover:text-secondary">Invoices</a></li>
                    <li><a href="/admin/quotes" class=" text-white hover:text-secondary">Quotes</a></li>
                    <li><a href="/admin/abandoned-carts" class=" text-white hover:text-secondary">Abandoned
                            Carts</a></li>
                </ul>

                <!-- Marketing Section -->
                <a href="{{ route('admin.marketing.index') }}"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-parimary/10">
                    <i class="fas fa-bullhorn"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Marketing</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="/admin/coupons" class=" text-white hover:text-secondary">Coupons</a></li>
                    <li><a href="/admin/discounts" class=" text-white hover:text-secondary">Discounts</a></li>
                    <li><a href="/admin/email-campaigns" class=" text-white hover:text-secondary">Email
                            Campaigns</a></li>
                    <li><a href="/admin/affiliate-programs" class=" text-white hover:text-secondary">Affiliate
                            Programs</a></li>
                    <li><a href="/admin/loyalty-programs" class=" text-white hover:text-secondary">Loyalty
                            Programs</a></li>
                    <li><a href="/admin/promotions" class=" text-white hover:text-secondary">Promotions</a></li>
                </ul>

                <!-- Engagement Section -->
                <a href="{{ route('admin.engagements.index') }}"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-parimary/10">
                    <i class="fas fa-users"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Engagements</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="/admin/customers" class=" text-white hover:text-secondary">Customers</a></li>
                    <li><a href="/admin/reviews" class=" text-white hover:text-secondary">Reviews</a></li>
                    <li><a href="/admin/surveys" class=" text-white hover:text-secondary">Surveys</a></li>
                    <li><a href="/admin/community-forums" class=" text-white hover:text-secondary">Community
                            Forums</a></li>
                    <li><a href="/admin/chat-support" class=" text-white hover:text-secondary">Chat & Support</a>
                    </li>
                    <li><a href="/admin/wishlists" class=" text-white hover:text-secondary">Wishlists</a></li>
                </ul>

                <!-- Settings Section -->
                <a href="{{ route('admin.settings.index') }}"
                    class="flex items-center p-2 hover:border-l-2 border-primary  text-white bg-parimary/10">
                    <i class="fas fa-cogs"></i>
                    <span :class="{ 'hidden': isCompact }" class="ml-2">Settings</span>
                </a>
                <ul :class="{ 'hidden': isCompact }" class="ml-7 space-y-1">
                    <li><a href="{{ route('admin.settings.general.edit') }}"
                            class=" text-white hover:text-secondary">General</a></li>
                    <li><a href="{{ route('admin.settings.business.edit') }}"
                            class=" text-white hover:text-secondary">Business</a></li>
                    <li><a href="{{ route('admin.settings.site.edit') }}"
                            class=" text-white hover:text-secondary">Site</a></li>
                    <li><a href="{{ route('admin.settings.shipping.edit') }}"
                            class=" text-white hover:text-secondary">Shipping</a></li>
                    <li><a href="{{ route('admin.settings.payment.edit') }}"
                            class=" text-white hover:text-secondary">Payment</a></li>
                    <li><a href="{{ route('admin.settings.tax.edit') }}"
                            class=" text-white hover:text-secondary">Tax</a></li>
                    <li><a href="{{ route('admin.settings.security.edit') }}"
                            class=" text-white hover:text-secondary">Security</a></li>
                    <li><a href="{{ route('admin.settings.notifications.edit') }}"
                            class=" text-white hover:text-secondary">Notifications</a></li>
                    <li><a href="{{ route('admin.settings.advanced.edit') }}"
                            class=" text-white hover:text-secondary">Advanced</a></li>

                </ul>
            </nav>

        </div>

    </div>

</div>
