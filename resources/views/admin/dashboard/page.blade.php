<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Dashboard Header -->
        <h1 class="text-3xl font-bold text-gray-800">Welcome to the Admin Dashboard</h1>
        <p class="text-gray-600 mt-2">Here is an overview of your website’s performance.</p>

        <!-- Dashboard Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            <!-- Total Users -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-users text-3xl text-primary"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Total Users</h2>
                        <p class="text-gray-600 text-xl font-bold">1,200</p>
                    </div>
                </div>
            </div>

            <!-- Total Sales -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-dollar-sign text-3xl text-primary"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Total Sales</h2>
                        <p class="text-gray-600 text-xl font-bold">$23,500</p>
                    </div>
                </div>
            </div>

            <!-- New Orders -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-shopping-cart text-3xl text-primary"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">New Orders</h2>
                        <p class="text-gray-600 text-xl font-bold">320</p>
                    </div>
                </div>
            </div>

            <!-- Pending Tickets -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-ticket-alt text-3xl text-primary"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Pending Tickets</h2>
                        <p class="text-gray-600 text-xl font-bold">45</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Links Section -->
        <div class="bg-white shadow-md rounded-lg p-6 mt-6">
            <h2 class="text-lg font-semibold text-gray-800">Quick Links</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
                <!-- Catalog -->
                <a href="{{ route('admin.catalog.index') }}" class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-box-open text-2xl text-primary"></i>
                        <span class="ml-4 text-lg text-gray-800 font-semibold">Catalog</span>
                    </div>
                </a>

                <!-- Sales -->
                <a href="{{ route('admin.sales.index') }}" class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-shopping-cart text-2xl text-primary"></i>
                        <span class="ml-4 text-lg text-gray-800 font-semibold">Sales</span>
                    </div>
                </a>

                <!-- Marketing -->
                <a href="{{ route('admin.marketing.index') }}"
                    class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-bullhorn text-2xl text-primary"></i>
                        <span class="ml-4 text-lg text-gray-800 font-semibold">Marketing</span>
                    </div>
                </a>

                <!-- Engagements -->
                <a href="{{ route('admin.engagements.index') }}"
                    class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-comments text-2xl text-primary"></i>
                        <span class="ml-4 text-lg text-gray-800 font-semibold">Engagements</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Activity & Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
            <!-- Recent Activity -->
            <div class="bg-white shadow-md rounded-lg p-6 lg:col-span-2">
                <h2 class="text-lg font-semibold text-gray-800">Recent Activity</h2>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-user text-primary text-xl"></i>
                        <p class="ml-4 text-gray-600">New user <strong>John Doe</strong> signed up.</p>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-shopping-cart text-primary text-xl"></i>
                        <p class="ml-4 text-gray-600">Order #12345 has been placed.</p>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-ticket-alt text-primary text-xl"></i>
                        <p class="ml-4 text-gray-600">Ticket #67890 has been opened.</p>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-dollar-sign text-primary text-xl"></i>
                        <p class="ml-4 text-gray-600">New payment of <strong>$200</strong> received.</p>
                    </li>
                </ul>
            </div>

            <!-- Placeholder for Chart (Static for now) -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-800">Sales Overview</h2>
                <div class="mt-4 h-40 bg-gray-100 flex items-center justify-center">
                    <p class="text-gray-500">Chart Placeholder</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
