<x-app-layout>
    <!-- Alpine.js data object with a toggle method -->
    <div x-data="{
        isVisible: false,
        toggleVisibility() { this.isVisible = true }
    }" @toggle-visibility.window="toggleVisibility">

        <h1 class="text-2xl">Visible: <span x-text="isVisible ? 'Yes' : 'No'"></span></h1>

        <!-- Include the child component -->
        <x-sidenavbar />

        <!-- Show/hide content based on isVisible state with x-cloak -->
        <div x-show="isVisible" x-cloak>This is half</div>

        <!-- Debugging button to manually trigger the toggle -->
        <button @click="toggleVisibility" class="mt-4 p-2 bg-blue-500 text-white rounded">Toggle Visibility</button>
    </div>
</x-app-layout>
