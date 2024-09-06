<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
        ['name' => 'Sales', 'url' => route('admin.sales.index'), 'icon' => 'fa-shopping-cart'],
    ]" />

    <!-- Dashboard Header -->
    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Sales Dashboard</h2>
        <p class="text-sm text-gray-600">An overview of your sales performance</p>
    </div>

    <!-- Statistics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Total Orders -->
        <div
            class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Orders</h3>
                <p class="text-2xl font-bold">1,234</p>
                <span class="text-sm text-gray-200">+12% from last month</span>
            </div>
            <i class="fas fa-shopping-cart fa-3x"></i>
        </div>

        <!-- Total Returns -->
        <div
            class="bg-gradient-to-r from-red-500 to-red-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Returns</h3>
                <p class="text-2xl font-bold">56</p>
                <span class="text-sm text-gray-200">+5% from last month</span>
            </div>
            <i class="fas fa-undo-alt fa-3x"></i>
        </div>

        <!-- Total Transactions -->
        <div
            class="bg-gradient-to-r from-green-500 to-green-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Transactions</h3>
                <p class="text-2xl font-bold">$12,345</p>
                <span class="text-sm text-gray-200">+8% from last month</span>
            </div>
            <i class="fas fa-exchange-alt fa-3x"></i>
        </div>

        <!-- Total Invoices -->
        <div
            class="bg-gradient-to-r from-yellow-500 to-yellow-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Invoices</h3>
                <p class="text-2xl font-bold">789</p>
                <span class="text-sm text-gray-200">+3% from last month</span>
            </div>
            <i class="fas fa-file-invoice fa-3x"></i>
        </div>
    </div>

    <!-- Detailed Sections -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        <!-- Orders Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-blue-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-blue-600 flex items-center">
                <i class="fas fa-shopping-cart mr-2"></i> Orders
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage and track orders</p>
            <a href="{{ route('admin.sales.orders.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition">
                View Orders
            </a>
        </div>

        <!-- Returns Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-red-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-red-600 flex items-center">
                <i class="fas fa-undo-alt mr-2"></i> Returns
            </h3>
            <p class="text-sm text-gray-600 mt-1">Process and track returns</p>
            <a href="{{ route('admin.sales.returns.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-red-600 text-white text-sm rounded-md hover:bg-red-700 transition">
                View Returns
            </a>
        </div>

        <!-- Transactions Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-green-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-green-600 flex items-center">
                <i class="fas fa-exchange-alt mr-2"></i> Transactions
            </h3>
            <p class="text-sm text-gray-600 mt-1">Track financial transactions</p>
            <a href="{{ route('admin.sales.transactions.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-green-600 text-white text-sm rounded-md hover:bg-green-700 transition">
                View Transactions
            </a>
        </div>

        <!-- Invoices Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-yellow-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-yellow-600 flex items-center">
                <i class="fas fa-file-invoice mr-2"></i> Invoices
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage and view invoices</p>
            <a href="{{ route('admin.sales.invoices.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-yellow-600 text-white text-sm rounded-md hover:bg-yellow-700 transition">
                View Invoices
            </a>
        </div>

        <!-- Quotes Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-purple-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-purple-600 flex items-center">
                <i class="fas fa-file-alt mr-2"></i> Quotes
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage customer quotes</p>
            <a href="#"
                class="inline-block mt-3 px-3 py-1 bg-purple-600 text-white text-sm rounded-md hover:bg-purple-700 transition">
                View Quotes
            </a>
        </div>

        <!-- Abandoned Carts Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-indigo-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-indigo-600 flex items-center">
                <i class="fas fa-shopping-basket mr-2"></i> Abandoned Carts
            </h3>
            <p class="text-sm text-gray-600 mt-1">Track abandoned carts</p>
            <a href="#"
                class="inline-block mt-3 px-3 py-1 bg-indigo-600 text-white text-sm rounded-md hover:bg-indigo-700 transition">
                View Abandoned Carts
            </a>
        </div>
    </div>
</x-admin-layout>
