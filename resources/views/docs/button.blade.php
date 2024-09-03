<x-docs-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6">Button Component Documentation</h1>

        <!-- Variants Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Variants</h2>
            <p class="mb-4">Customize the button's appearance by choosing from different variants.</p>

            <div class="flex flex-wrap gap-4">
                <x-button variant="primary" size="base">Primary</x-button>
                <x-button variant="secondary" size="base">Secondary</x-button>
                <x-button variant="accent" size="base">Accent</x-button>
                <x-button variant="success" size="base">Success</x-button>
                <x-button variant="warning" size="base">Warning</x-button>
                <x-button variant="danger" size="base">Danger</x-button>
                <x-button variant="info" size="base">Info</x-button>
                <x-button variant="dark" size="base">Dark</x-button>
            </div>
        </section>

        <!-- Sizes Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Sizes</h2>
            <p class="mb-4">Adjust the button size using predefined options: `sm`, `base`, `lg`, `xl`.</p>

            <div class="flex flex-wrap items-baseline gap-4">
                <x-button size="sm" variant="primary">Small</x-button>
                <x-button size="base" variant="primary">Base</x-button>
                <x-button size="lg" variant="primary">Large</x-button>
                <x-button size="xl" variant="primary">Extra Large</x-button>
            </div>
        </section>

        <!-- Shapes Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Shapes</h2>
            <p class="mb-4">Choose from different shapes to match your design: `solid`, `outline`, `ghost`.</p>

            <div class="flex flex-wrap gap-4">
                <x-button shape="solid" variant="primary" size="base">Solid</x-button>
                <x-button shape="outline" variant="primary" size="base">Outline</x-button>
                <x-button shape="ghost" variant="secondary" size="base">Ghost</x-button>
            </div>
        </section>

        <!-- Disabled State Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Disabled State</h2>
            <p class="mb-4">Buttons can be disabled using the `isDisabled` attribute.</p>

            <div class="flex flex-wrap gap-4">
                <x-button variant="primary" size="base" :isDisabled="true">Primary</x-button>
                <x-button variant="secondary" size="base" :isDisabled="true">Secondary</x-button>
                <x-button variant="accent" size="base" :isDisabled="true">Accent</x-button>
                <x-button variant="danger" size="base" :isDisabled="true">Danger</x-button>
            </div>
        </section>
    </div>
</x-docs-layout>
