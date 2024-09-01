<x-guest-layout>
    <x-slot name="title">Login</x-slot>

    <!-- Center the content vertically and horizontally -->
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input label="Email" name="email" type="email" value="{{ old('email') }}" required autofocus />
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input label="Password" name="password" type="password" required />
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="mb-4">
                    <x-checkbox name="remember" label="Remember Me" />
                </div>

                <!-- Submit Button -->
                <div>
                    <x-button type="submit">Login</x-button>
                </div>

                <!-- Forgot Password Link -->
                <div class="mt-4 text-center">
                    <x-link href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </x-link>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
