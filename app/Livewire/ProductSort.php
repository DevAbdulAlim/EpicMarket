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

        // Set initial value of $sortValue based on query parameters if they exist
        $sortBy = isset ($this->queryParams['sortBy']) ? $this->queryParams['sortBy'] : 'price';
        $sortDirection = isset ($this->queryParams['sortDirection']) ? $this->queryParams['sortDirection'] : 'asc';
        $this->sortValue = $sortBy . '-' . $sortDirection;
    }

    public function handleSort()
    {
        // Extract sorting criteria and direction from the selected value
        list($criteria, $direction) = explode('-', $this->sortValue);

        // Set the new sorting criteria and direction
        $this->queryParams['sortBy'] = $criteria;
        $this->queryParams['sortDirection'] = $direction;

        // Redirect to the current route with the updated query parameters
        $this->redirect(route('product.search', $this->queryParams));
    }

    public function render()
    {
        return view('livewire.product-sort');
    }
}