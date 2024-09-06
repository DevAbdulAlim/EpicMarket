<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line']]" />
    <!-- Statistics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Total Sales -->
        <div
            class="bg-gradient-to-r from-green-500 to-green-700 text-white p-4 rounded-md shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Sales</h3>
                <p class="text-2xl font-bold">$56,345</p>
                <span class="text-xs text-gray-200">+15% from last month</span>
            </div>
            <i class="fas fa-shopping-cart fa-2x"></i>
        </div>

        <!-- Total Customers -->
        <div
            class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-4 rounded-md shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Customers</h3>
                <p class="text-2xl font-bold">2,434</p>
                <span class="text-xs text-gray-200">+8% from last month</span>
            </div>
            <i class="fas fa-users fa-2x"></i>
        </div>

        <!-- Total Orders -->
        <div
            class="bg-gradient-to-r from-yellow-500 to-yellow-700 text-white p-4 rounded-md shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Orders</h3>
                <p class="text-2xl font-bold">876</p>
                <span class="text-xs text-gray-200">+5% from last month</span>
            </div>
            <i class="fas fa-box-open fa-2x"></i>
        </div>

        <!-- Revenue -->
        <div
            class="bg-gradient-to-r from-red-500 to-red-700 text-white p-4 rounded-md shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Revenue</h3>
                <p class="text-2xl font-bold">$120,876</p>
                <span class="text-xs text-gray-200">+12% from last month</span>
            </div>
            <i class="fas fa-dollar-sign fa-2x"></i>
        </div>
    </div>

    <!-- Core Sections -->
    <div class="grid mb-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Reports Section -->
        <div class="bg-white p-4 rounded-md shadow-md border hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-md font-semibold text-red-600 flex items-center">
                <i class="fas fa-chart-bar mr-2"></i> Reports
            </h3>
            <p class="text-xs text-gray-600 mt-1">View and analyze platform reports</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-red-600 text-white text-xs rounded-md hover:bg-red-700 transition">
                Manage Reports
            </a>
        </div>
        <!-- Catalog Section -->
        <div class="bg-white p-4 rounded-md shadow-md border hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-md font-semibold text-blue-600 flex items-center">
                <i class="fas fa-boxes mr-2"></i> Catalog
            </h3>
            <p class="text-xs text-gray-600 mt-1">Manage categories, products, brands, and more</p>
            <a href="{{ route('admin.catalog.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-blue-600 text-white text-xs rounded-md hover:bg-blue-700 transition">Manage
                Catalog</a>
        </div>

        <!-- Sales Section -->
        <div class="bg-white p-4 rounded-md shadow-md border hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-md font-semibold text-green-600 flex items-center">
                <i class="fas fa-shopping-cart mr-2"></i> Sales
            </h3>
            <p class="text-xs text-gray-600 mt-1">Track orders, returns, invoices, and transactions</p>
            <a href="{{ route('admin.sales.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-green-600 text-white text-xs rounded-md hover:bg-green-700 transition">Manage
                Sales</a>
        </div>

        <!-- Marketing Section -->
        <div class="bg-white p-4 rounded-md shadow-md border hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-md font-semibold text-yellow-600 flex items-center">
                <i class="fas fa-bullhorn mr-2"></i> Marketing
            </h3>
            <p class="text-xs text-gray-600 mt-1">Run marketing campaigns and manage discounts</p>
            <a href="{{ route('admin.marketing.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-yellow-600 text-white text-xs rounded-md hover:bg-yellow-700 transition">Manage
                Marketing</a>
        </div>

        <!-- Engagements Section -->
        <div class="bg-white p-4 rounded-md shadow-md border hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-md font-semibold text-indigo-600 flex items-center">
                <i class="fas fa-users mr-2"></i> Engagements
            </h3>
            <p class="text-xs text-gray-600 mt-1">Manage customers, reviews, and community forums</p>
            <a href="{{ route('admin.engagements.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-indigo-600 text-white text-xs rounded-md hover:bg-indigo-700 transition">Manage
                Engagements</a>
        </div>

        <!-- Settings Section -->
        <div class="bg-white p-4 rounded-md shadow-md border hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-md font-semibold text-purple-600 flex items-center">
                <i class="fas fa-cogs mr-2"></i> Settings
            </h3>
            <p class="text-xs text-gray-600 mt-1">Configure system settings and integrations</p>
            <a href="{{ route('admin.settings.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-purple-600 text-white text-xs rounded-md hover:bg-purple-700 transition">Manage
                Settings</a>
        </div>
    </div>

    <!-- Charts and Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
        <!-- Sales Chart -->
        <div class="bg-white p-4 rounded-md shadow-md">
            <h3 class="text-md font-semibold text-gray-700">Sales Overview</h3>
            <canvas id="salesChart" height="140"></canvas>
        </div>

        <!-- Revenue Chart -->
        <div class="bg-white p-4 rounded-md shadow-md">
            <h3 class="text-md font-semibold text-gray-700">Revenue Overview</h3>
            <canvas id="revenueChart" height="140"></canvas>
        </div>

        <!-- Orders Chart -->
        <div class="bg-white p-4 rounded-md shadow-md">
            <h3 class="text-md font-semibold text-gray-700">Orders Overview</h3>
            <canvas id="ordersChart" height="140"></canvas>
        </div>

        <!-- Customers Chart -->
        <div class="bg-white p-4 rounded-md shadow-md">
            <h3 class="text-md font-semibold text-gray-700">Customer Growth</h3>
            <canvas id="customersChart" height="140"></canvas>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Sales Chart Script -->
    <script>
        var ctxSales = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctxSales, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [12000, 15000, 11000, 18000, 20000, 22000],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.2)',
                }]
            },
            options: {
                responsive: true,
            }
        });
    </script>

    <!-- Revenue Chart Script -->
    <script>
        var ctxRevenue = document.getElementById('revenueChart').getContext('2d');
        var revenueChart = new Chart(ctxRevenue, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [15000, 20000, 17000, 25000, 23000, 26000],
                    borderColor: '#f59e0b',
                    backgroundColor: 'rgba(245, 158, 11, 0.7)',
                }]
            },
            options: {
                responsive: true,
            }
        });
    </script>

    <!-- Orders Chart Script -->
    <script>
        var ctxOrders = document.getElementById('ordersChart').getContext('2d');
        var ordersChart = new Chart(ctxOrders, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Orders',
                    data: [800, 850, 900, 950, 1000, 1100],
                    borderColor: '#fbbf24',
                    backgroundColor: 'rgba(251, 191, 36, 0.3)',
                }]
            },
            options: {
                responsive: true,
            }
        });
    </script>

    <!-- Customers Chart Script -->
    <script>
        var ctxCustomers = document.getElementById('customersChart').getContext('2d');
        var customersChart = new Chart(ctxCustomers, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Customers',
                    data: [500, 700, 900, 1100, 1300, 1500],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.3)',
                }]
            },
            options: {
                responsive: true,
            }
        });
    </script>
</x-admin-layout>
