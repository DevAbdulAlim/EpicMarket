<!-- resources/views/user/profile.blade.php -->

<x-user-layout>
    <x-slot name="title">User Profile</x-slot>

    <!-- User Profile Content -->
    <h1 class="text-2xl font-bold mb-4">Your Profile</h1>
    <p class="text-sm text-gray-600 mb-4">Manage your account settings and update your personal information.</p>

    <!-- Profile Form -->
    <form action="#" method="POST" class="space-y-4">
        <!-- Name Field -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                placeholder="John Doe">
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                placeholder="john.doe@example.com">
        </div>

        <!-- Update Button -->
        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
            Update Profile
        </button>
    </form>
</x-user-layout>
