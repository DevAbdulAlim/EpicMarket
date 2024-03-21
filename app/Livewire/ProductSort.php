<?php

namespace App\Livewire;

use Livewire\Component;

class ProductSort extends Component
{
    public $total;
    public $sortValue;

    public $queryParams;


    public function mount($total)
    {
        $this->total = $total;
        $this->queryParams = request()->query();

    }
    public function handleSort()
    {
        // Extract sorting criteria and direction from the selected value
        list($criteria, $direction) = explode('-', $this->sortValue);

        // Set the new sorting criteria and direction
        $this->sortBy = $criteria;
        $this->sortDirection = $direction;

        // Add the new sorting criteria and direction to the query parameters
        $this->queryParams['sortBy'] = $this->sortBy;
        $this->queryParams['sortDirection'] = $this->sortDirection;

        // Redirect to the current route with the updated query parameters
        $this->redirect(route('product.search', $this->queryParams));
    }


    public function render()
    {
        return view('livewire.product-sort');
    }
}