<?php

namespace App\Livewire;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductReview extends Component
{
    public $rating;
    public $comment;
    public $reviews;

    public $userReview;

    public $productId;

    public function mount($productId)
    {
        $this->productId = $productId;

        $this->refreshReviews();

    }


    public function updateOrCreateReview()
    {
        Review::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'product_id' => $this->productId,
            ],
            [
                'rating' => $this->rating,
                'comment' => $this->comment,
            ]
        );

        // Refresh the reviews data
        $this->refreshReviews();

    }

    public function deleteReview($id)
    {
        // Logic for deleting a review
        Review::find($id)->delete();

        // Refresh the reviews data
        $this->refreshReviews();
    }

    private function refreshReviews()
    {


        $this->reviews = Review::with([
            'user' => function ($query) {
                $query->select('id', 'name');
            }
        ])->where('product_id', $this->productId)->get();

        $userId = Auth::id();
        $this->userReview = $this->reviews->first(function ($review) use ($userId) {
            return $review->user_id === $userId;
        });
        if ($this->userReview) {
            $this->rating = $this->userReview->rating;
            $this->comment = $this->userReview->comment;
        } else {
            $this->rating = null;
            $this->comment = '';
        }
    }


    public function render()
    {
        return view('livewire.product-review');
    }
}