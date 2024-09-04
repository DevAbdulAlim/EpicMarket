<!-- resources/views/components/sidenavbar.blade.php -->
<div>
    <!-- Button to dispatch the toggle-visibility event -->
    <button @click="$dispatch('toggle-visibility')" class="px-4 py-2 bg-blue-500 text-white rounded">
        Toggle Visibility
    </button>
</div>
