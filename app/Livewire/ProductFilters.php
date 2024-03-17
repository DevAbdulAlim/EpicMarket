<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class ProductFilters extends Component
{
    public $categories;
    public $selectedCategories = [];

    public function mount(Request $request)
    {
        $this->categories = Category::take(8)->get();

        $selectedCategoriesFromUrl = $request->query('categories');

        if ($selectedCategoriesFromUrl) {
            $this->selectedCategories = explode(',', $selectedCategoriesFromUrl);
        }

    }
    public function updateSelectedCategories($value)
    {
        if (in_array($value, $this->selectedCategories)) {
            // Remove the selected category from the array
            $this->selectedCategories = array_diff($this->selectedCategories, [$value]);
        } else {
            // Add the selected category to the array
            $this->selectedCategories[] = $value;
        }

        // Convert the array of selected categories back to a comma-separated string
        $selectedCategoriesString = implode(',', $this->selectedCategories);

        // Redirect to the product.search route with the updated selected categories
        $this->redirect(route('product.search', ['categories' => $selectedCategoriesString]));
    }


    public function render()
    {
        return view('livewire.product-filters');
    }
}
