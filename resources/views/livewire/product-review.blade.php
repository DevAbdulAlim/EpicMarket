<div class="p-4">
    <!-- Display Form for Creating a Review -->
    <form wire:submit.prevent="updateOrCreateReview" class="mb-4">
        <div class="mb-2">
            <label for="rating" class="block font-semibold">Rating:</label>
            <x-input type="number" wire:model="rating" id="rating" min="1" max="5" required
                class="w-full" />
        </div>
        <div class="mb-2">
            <label for="comment" class="block font-semibold">Comment:</label>
            <textarea wire:model="comment" id="comment" rows="3" class="w-full focus:ring-green-500 focus:border-green-500 px-3 py-2 border border-gray-300 rounded"></textarea>
        </div>
        <div>
            @auth
            <button type="submit" class="px-4 py-2 font-semibold text-white bg-green-500 rounded hover:bg-green-600">
                @if ($userReview)
                    Update Review
                @else
                    Submit Review
                @endif
            </button>
            @else
            <a class="px-4 py-2 font-semibold text-white bg-green-500 rounded hover:bg-green-600" href="{{route('login')}}">Login to add review</a>
            @endauth
        </div>
    </form>

    <!-- Display Current User's Review -->
    @if ($userReview)
        <div class="p-4 mb-4 bg-white rounded-md shadow-md">
            <div class="flex items-center justify-between mb-2">
                <!-- User avatar icon and name -->
                <div class="flex items-center">
                    <i class="mr-2 text-2xl text-gray-500 fas fa-user-circle"></i>
                    <span class="text-lg font-semibold">{{ $userReview->user->name }}</span>
                    <!-- User rating -->
                    <div class="flex items-center ml-4">
                        <span class="text-lg font-semibold">{{ $userReview->rating }}</span>
                        <span class="ml-1 text-yellow-500"><i class="fas fa-star"></i></span>
                    </div>
                </div>
                <!-- Delete button -->
                <button wire:click="deleteReview({{ $userReview->id }})" class="text-red-500 hover:text-red-700">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
            <!-- User comment -->
            <div>
                <p class="text-gray-700">{{ $userReview->comment }}</p>
            </div>
        </div>
    @endif



    <!-- Display Existing Reviews -->
    <ul>
        @foreach ($reviews as $review)
            @if (!$userReview || $review->id !== $userReview->id)
                <div class="p-4 mb-4 bg-white rounded-md shadow-md">
                    <div class="flex items-center justify-between mb-2">
                        <!-- User avatar icon and name -->
                        <div class="flex items-center">
                            <i class="mr-2 text-2xl text-gray-500 fas fa-user-circle"></i>
                            <span class="text-lg font-semibold">{{ $review->user->name }}</span>
                            <!-- User rating -->
                            <div class="flex items-center ml-4">
                                <span class="text-lg font-semibold">{{ $review->rating }}</span>
                                <span class="ml-1 text-yellow-500"><i class="fas fa-star"></i></span>
                            </div>
                        </div>

                    </div>
                    <!-- User comment -->
                    <div>
                        <p class="text-gray-700">{{ $review->comment }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </ul>
</div>
