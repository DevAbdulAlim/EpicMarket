<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[['name' => 'Dashboard', 'url' => '/admin', 'icon' => 'fa-chart-line']]" />
        <h1 class="text-3xl font-bold">Welcome to the Admin Dashboard</h1>
        <!-- Admin dashboard content here -->
    </div>
</x-admin-layout>
