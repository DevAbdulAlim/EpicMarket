@props([
    'isOpen' => false,
    'isCompact' => false,
])

@php
    $navItems = [
        [
            'name' => 'Dashboard',
            'route' => route('admin.index'),
            'icon' => 'fas fa-chart-line',
            'dropdown' => false,
        ],
        [
            'name' => 'Catalog',
            'route' => route('admin.catalog.index'),
            'icon' => 'fas fa-list',
            'dropdown' => true,
            'items' => [
                ['name' => 'Categories', 'route' => route('admin.catalog.categories.index')],
                ['name' => 'Products', 'route' => route('admin.catalog.products.index')],
                ['name' => 'Brands', 'route' => '/admin/brands'],
                ['name' => 'Tags', 'route' => '/admin/tags'],
                ['name' => 'Attributes', 'route' => '/admin/attributes'],
            ],
        ],
        [
            'name' => 'Sales',
            'route' => route('admin.sales.index'),
            'icon' => 'fas fa-shopping-cart',
            'dropdown' => true,
            'items' => [
                ['name' => 'Orders', 'route' => '/admin/orders'],
                ['name' => 'Returns', 'route' => '/admin/returns'],
                ['name' => 'Transactions', 'route' => '/admin/transactions'],
                ['name' => 'Invoices', 'route' => '/admin/invoices'],
                ['name' => 'Quotes', 'route' => '/admin/quotes'],
                ['name' => 'Abandoned Carts', 'route' => '/admin/abandoned-carts'],
            ],
        ],
        [
            'name' => 'Marketing',
            'route' => route('admin.marketing.index'),
            'icon' => 'fas fa-bullhorn',
            'dropdown' => true,
            'items' => [
                ['name' => 'Coupons', 'route' => '/admin/coupons'],
                ['name' => 'Discounts', 'route' => '/admin/discounts'],
                ['name' => 'Email Campaigns', 'route' => '/admin/email-campaigns'],
                ['name' => 'Affiliate Programs', 'route' => '/admin/affiliate-programs'],
                ['name' => 'Loyalty Programs', 'route' => '/admin/loyalty-programs'],
                ['name' => 'Promotions', 'route' => '/admin/promotions'],
            ],
        ],
        [
            'name' => 'Engagements',
            'route' => route('admin.engagements.index'),
            'icon' => 'fas fa-users',
            'dropdown' => true,
            'items' => [
                ['name' => 'Customers', 'route' => '/admin/customers'],
                ['name' => 'Reviews', 'route' => '/admin/reviews'],
                ['name' => 'Surveys', 'route' => '/admin/surveys'],
                ['name' => 'Community Forums', 'route' => '/admin/community-forums'],
                ['name' => 'Chat & Support', 'route' => '/admin/chat-support'],
                ['name' => 'Wishlists', 'route' => '/admin/wishlists'],
            ],
        ],
        [
            'name' => 'Settings',
            'route' => route('admin.settings.index'),
            'icon' => 'fas fa-cogs',
            'dropdown' => true,
            'items' => [
                ['name' => 'General', 'route' => route('admin.settings.general.edit')],
                ['name' => 'Business', 'route' => route('admin.settings.business.edit')],
                ['name' => 'Site', 'route' => route('admin.settings.site.edit')],
                ['name' => 'Shipping', 'route' => route('admin.settings.shipping.edit')],
                ['name' => 'Payment', 'route' => route('admin.settings.payment.edit')],
                ['name' => 'Tax', 'route' => route('admin.settings.tax.edit')],
                ['name' => 'Security', 'route' => route('admin.settings.security.edit')],
                ['name' => 'Notifications', 'route' => route('admin.settings.notifications.edit')],
                ['name' => 'Advanced', 'route' => route('admin.settings.advanced.edit')],
            ],
        ],
    ];
@endphp

<div x-data="{ isOpen: {{ $isOpen ? 'true' : 'false' }}, $isCompact }" :class="{ '-translate-x-full md:translate-x-0': !isOpen, 'translate-x-0': isOpen }"
    class="fixed inset-y-0 left-0 z-30 transition-all duration-500 ease-in-out -translate-x-full md:translate-x-0">

    <div class="h-full w-screen md:w-full" x-data="{ activeDropdown: null }">
        <div @click="isOpen = false" class="absolute w-full h-full"></div>

        <!-- Sidebar Content Area with Compact and Expanded States -->
        <div class="h-full overflow-y-auto overflow-x-hidden scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-gray-200 bg-primary text-white flex-1 w-64 transition-all duration-500 ease-in-out"
            :class="{ 'w-10': isCompact, 'w-64': !isCompact }">

            <!-- Sidebar Header -->
            <div class="sticky top-0 flex items-center bg-primary z-10 border-b justify-between">
                <div :class="{ 'hidden': isCompact }" class="text-lg p-2 font-bold whitespace-nowrap">Admin Panel</div>
                <div x-show="isCompact" class="text-lg font-bold p-2 hidden md:block">AP</div>
                <button @click="isOpen = false"
                    class="text-primary rounded-full p-2 m-2 bg-light focus:outline-none md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar Navigation Items -->
            <nav class="flex flex-col mt-4 space-y-2 mb-4">
                @foreach ($navItems as $item)
                    <!-- If it has no dropdown -->
                    @if (!$item['dropdown'])
                        <a href="{{ $item['route'] }}"
                            class="flex items-center p-2 hover:border-l-2 border-primary text-white bg-primary/10">
                            <i class="{{ $item['icon'] }}"></i>
                            <span :class="{ 'hidden': isCompact }" class="ml-2">{{ $item['name'] }}</span>
                        </a>
                    @else
                        <!-- Dropdown Section -->
                        {{-- compact --}}
                        <div class="z-10" :class="{ 'hidden': !isCompact }"
                            @mouseenter="activeDropdown === '{{ strtolower($item['name']) }}' ? activeDropdown = null : activeDropdown = '{{ strtolower($item['name']) }}'"
                            @mouseleave="activeDropdown === '{{ strtolower($item['name']) }}' ? activeDropdown = null : activeDropdown = '{{ strtolower($item['name']) }}'">
                            <div
                                class="flex items-center p-2 hover:border-l-2 border-primary text-white cursor-pointer">
                                <a href="{{ $item['route'] }}">
                                    <i class="{{ $item['icon'] }} text-xl"></i>
                                    <svg :class="{ 'rotate-180': activeDropdown === '{{ strtolower($item['name']) }}', 'hidden': isCompact }"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="ml-auto h-5 w-5 transition-transform transform" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                            </div>

                            <!-- Dropdown Items -->
                            <ul x-show="activeDropdown === '{{ strtolower($item['name']) }}'" x-collapse
                                class="ml-8 z-10"
                                :class="{ 'absolute left-2 z-50 rounded-md bg-white w-48 shadow-2xl -mt-10': isCompact }">
                                @foreach ($item['items'] as $subItem)
                                    <li
                                        :class="{ ' px-4 py-2 text-blue-800 hover:bg-blue-500 hover:text-white': isCompact }">
                                        <a href="{{ $subItem['route'] }}" @click.stop>
                                            {{ $subItem['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- non-compact --}}
                        <div class="z-10" :class="{ 'hidden': isCompact }">
                            <div
                                class="flex items-center p-2 hover:border-l-2 border-primary text-white cursor-pointer">
                                <a href="{{ $item['route'] }}" class="whitespace-nowrap">
                                    <i class="{{ $item['icon'] }}" :class="{ 'hidden': isCompact }"></i>
                                    <span class="ml-2">{{ $item['name'] }}</span></a>
                                <svg @click="activeDropdown === '{{ strtolower($item['name']) }}' ? activeDropdown = null : activeDropdown = '{{ strtolower($item['name']) }}'"
                                    :class="{ 'rotate-180': activeDropdown === '{{ strtolower($item['name']) }}', 'hidden': isCompact }"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ml-auto h-5 w-5 transition-transform transform" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>

                            <!-- Dropdown Items -->
                            <ul x-show="activeDropdown === '{{ strtolower($item['name']) }}'" x-collapse
                                class="ml-7 z-10 space-y-1"
                                :class="{ 'absolute left-2 p-2 z-50 bg-white w-fit shadow-2xl': isCompact }">
                                @foreach ($item['items'] as $subItem)
                                    <li>
                                        <a href="{{ $subItem['route'] }}"
                                            :class="{ 'text-blue-800 hover:text-blue-500': isCompact }" @click.stop>
                                            {{ $subItem['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endforeach
            </nav>
        </div>

    </div>

</div>
