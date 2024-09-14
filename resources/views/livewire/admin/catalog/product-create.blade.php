<!-- Assuming this is inside the <main> element which already has ml-64 -->
<div class="container mx-auto p-4 relative w-full">
    <form wire:submit.prevent="submitForm">
        <!-- Stepper Component -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-8 w-full">
            @foreach ($steps as $index => $step)
                <div class="flex-1 relative w-full">
                    <div class="flex flex-col items-center p-2 border justify-center text-center cursor-pointer transition duration-300 ease-in-out w-full md:w-auto {{ $currentStep > $index + 1 ? 'bg-green-500 text-white' : ($currentStep === $index + 1 ? 'bg-rose-600 text-white shadow-lg' : 'bg-gray-100 text-gray-600') }}"
                        wire:click.prevent="currentStep = {{ $index + 1 }}">
                        <i class="{{ $step['icon'] }} text-2xl"></i>
                        <span class="mt-1 text-sm font-semibold">{{ $step['name'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Step Content -->
        <div class="p-6 border border-gray-200 rounded shadow-md bg-white mb-16"> <!-- Added mb-16 for bottom padding -->
            @if ($currentStep === 1)
                @include('admin.catalog.products.create.basic')
            @endif

            @if ($currentStep === 2)
                @include('admin.catalog.products.create.inventory')
            @endif

            @if ($currentStep === 3)
                @include('admin.catalog.products.create.seo')
            @endif

            @if ($currentStep === 4)
                @include('admin.catalog.products.create.variants')
            @endif

            @if ($currentStep === 5)
                @include('admin.catalog.products.create.shipping')
            @endif

            @if ($currentStep === 6)
                @include('admin.catalog.products.create.advance')
            @endif
        </div>

        <!-- Fixed Navigation Buttons within Main Content (Adjusted for ml-64) -->
        <div class="fixed bottom-0 left-0 right-0 ml-64 bg-white py-4 shadow-lg">
            <div class="flex justify-between px-4">
                <button type="button" wire:click="goToPreviousStep"
                    class="px-4 py-2 bg-gray-300 text-gray-700 hover:bg-gray-400 rounded transition"
                    @if ($currentStep === 1) disabled @endif>
                    Back
                </button>

                @if ($currentStep < count($steps))
                    <button type="button" wire:click="submitStep"
                        class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-700 rounded transition">
                        Next
                    </button>
                @else
                    <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white hover:bg-green-700 rounded transition">
                        Submit
                    </button>
                @endif
            </div>
        </div>

    </form>
</div>
