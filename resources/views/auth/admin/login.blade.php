<x-guest-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md">
            <form method="POST" action="{{ route('admin.login') }}"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <h2 class="text-center text-2xl font-bold mb-6">Admin Login</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email Address
                    </label>
                    <x-input type="email" name="email" id="email" required />
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <x-input type="password" name="password" id="password" required />
                </div>
                <div class="flex items-center justify-between">
                    <x-button type="submit">
                        Login
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
