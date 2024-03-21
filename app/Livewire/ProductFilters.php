<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class ProductFilters extends Component
{
    public $minPrice = '';
    public $maxPrice = '';
    public $categories;
    public $selectedCategories = [];

    public function mount()
    {
        $request = request();
        $this->categories = Category::take(8)->get();

        // Set minPrice and maxPrice from the query parameters
        $this->minPrice = $request->query('minPrice');
        $this->maxPrice = $request->query('maxPrice');

        // Set selectedCategories from the query parameters
        $selectedCategoriesFromUrl = $request->query('categories');

        if ($selectedCategoriesFromUrl && is_array($selectedCategoriesFromUrl)) {
            // Convert the array to a string
            $selectedCategoriesFromUrl = implode(',', $selectedCategoriesFromUrl);
        }

        if ($selectedCategoriesFromUrl) {
            $this->selectedCategories = explode(',', $selectedCategoriesFromUrl);
        }
    }



    public function priceFilter()
    {
        $queryParams = $this->generateQueryParams();

        $this->redirect(route('product.search', $queryParams));
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

        // Build query parameters array
        $queryParams = $this->generateQueryParams();

        // Redirect to the product.search route with the updated query parameters
        $this->redirect(route('product.search', $queryParams));
    }

    private function generateQueryParams()
    {
        $queryParams = [];

        if (!empty ($this->minPrice)) {
            $queryParams['minPrice'] = $this->minPrice;
        }

        if (!empty ($this->maxPrice)) {
            $queryParams['maxPrice'] = $this->maxPrice;
        }

        if (!empty ($this->selectedCategories)) {
            $queryParams['categories'] = implode(',', $this->selectedCategories);
        }

        return $queryParams;
    }


    public function render()
    {
        return view('livewire.product-filters');
    }
}