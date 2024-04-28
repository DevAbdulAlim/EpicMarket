<div>
    <x-action-message on="click" class="fixed">
        @if ($message)
            <div class="fixed left-5 top-20 z-50 bg-green-500 text-white px-4 py-2 flex items-center shadow-2xl">
                <i class="fas fa-check-circle mr-2"></i>
                {{ $message }}
            </div>
        @endif
    </x-action-message>


    <button type="button" class="py-2 px-4 bg-green-800 text-white rounded-md hover:bg-green-900" wire:click="addToCart">
        Add To Cart
    </button>

</div>
