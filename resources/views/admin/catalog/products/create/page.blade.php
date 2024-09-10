<x-admin-layout>
    <div class="container mx-auto p-4">
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Stepper Component -->
            <x-stepper :steps="[
                ['name' => 'Basic', 'icon' => 'fas fa-info'],
                ['name' => 'Inventory', 'icon' => 'fas fa-boxes'],
                ['name' => 'SEO', 'icon' => 'fas fa-search'],
                ['name' => 'Variants', 'icon' => 'fas fa-list-alt'],
                ['name' => 'Shipping', 'icon' => 'fas fa-truck'],
                ['name' => 'Advance', 'icon' => 'fas fa-cog'],
            ]" next-label="Next Step" previous-label="Back" finish-label="Submit">

                <!-- Step 1: Basic Information -->
                <x-slot name="slot1">
                    @include('admin.catalog.products.create.basic')
                </x-slot>

                <!-- Step 2: Inventory Information -->
                <x-slot name="slot2">
                    @include('admin.catalog.products.create.inventory')
                </x-slot>

                <!-- Step 3: SEO Information -->
                <x-slot name="slot3">
                    @include('admin.catalog.products.create.seo')
                </x-slot>

                <!-- Step 4: Variants Information -->
                <x-slot name="slot4">
                    @include('admin.catalog.products.create.variants')
                </x-slot>

                <!-- Step 5: Shipping Information -->
                <x-slot name="slot5">
                    @include('admin.catalog.products.create.shipping')
                </x-slot>

                <!-- Step 6: Advanced Information -->
                <x-slot name="slot6">
                    @include('admin.catalog.products.create.advance')
                </x-slot>

            </x-stepper>
        </form>
    </div>
</x-admin-layout>
