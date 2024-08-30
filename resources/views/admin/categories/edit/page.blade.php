<x-admin-layout>
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-6">Edit Category</h1>
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <x-input type="text" id="name" name="name" size="md" variant="solid" color="green"
                    placeholder="Category Name" value="{{ $category->name }}" required minlength="3" />
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <!-- Use x-textarea component for textarea fields -->
                <x-textarea id="description" name="description" size="md" variant="solid" color="green"
                    placeholder="Category Description" rows="4">
                    {{ $category->description }}
                </x-textarea>
            </div>
            <x-button type="submit" variant="solid" color="green" size="md">
                Update Category
            </x-button>
        </form>
    </div>
</x-admin-layout>
