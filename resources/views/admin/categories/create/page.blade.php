<x-admin-layout>
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-6">Create New Category</h1>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <x-input type="text" id="name" name="name" size="md" variant="outline" color="blue"
                    placeholder="Category Name" required maxlength="255" />
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <!-- Use x-textarea component for textarea fields -->
                <x-textarea id="description" name="description" size="md" variant="outline" color="blue"
                    placeholder="Category Description" rows="4">
                    <!-- You can add default content here if needed -->
                </x-textarea>
            </div>
            <x-button type="submit" variant="solid" color="blue" size="md">
                Create Category
            </x-button>
        </form>
    </div>
</x-admin-layout>
