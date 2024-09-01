<x-guest-layout>
    <x-slot name="title">Register</x-slot>

    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input label="Name" name="name" type="text" value="{{ old('name') }}" required autofocus />
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input label="Email" name="email" type="email" value="{{ old('email') }}" required />
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

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input label="Confirm Password" name="password_confirmation" type="password" required />
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div>
                    <x-button type="submit">Register</x-button>
                </div>

                <!-- Already Registered Link -->
                <div class="mt-4 text-center">
                    <x-link href="{{ route('login') }}">
                        Already have an account? Login here.
                    </x-link>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
