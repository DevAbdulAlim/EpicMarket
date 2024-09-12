<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ProductCreate extends Component
{
    public $currentStep = 1;
    public $steps = [
        ['name' => 'Basic', 'icon' => 'fas fa-info'],
        ['name' => 'Inventory', 'icon' => 'fas fa-boxes'],
        ['name' => 'SEO', 'icon' => 'fas fa-search'],
        ['name' => 'Variants', 'icon' => 'fas fa-list-alt'],
        ['name' => 'Shipping', 'icon' => 'fas fa-truck'],
        ['name' => 'Advance', 'icon' => 'fas fa-cog'],
    ];
    public $basicInfo = [
        'name' => '',
        'slug' => '',
        'sku' => '',
        'tags' => '',
        'category' => '',
        'brand' => '',
        'primary_image' => null,
        'gallery_images' => [],
        'video_url' => '',
        'short_description' => '',
        'long_description' => '',
    ];
    public $inventory = [];
    public $seo = [];
    public $variants = [];
    public $shipping = [];
    public $advance = [];

    protected $rules = [
        'basicInfo.name' => 'required|string|max:255',
        'basicInfo.slug' => 'nullable|string|max:255',
        'basicInfo.sku' => 'nullable|string|max:255',
        'basicInfo.tags' => 'nullable|string|max:255',
        'basicInfo.category' => 'required|string',
        'basicInfo.brand' => 'required|string',
        'basicInfo.primary_image' => 'nullable|image|max:1024',
        'basicInfo.gallery_images.*' => 'nullable|image|max:1024',
        'basicInfo.video_url' => 'nullable|url',
        'basicInfo.short_description' => 'required|string|max:500',
        'basicInfo.long_description' => 'nullable|string|max:2000',
        'inventory.stock' => 'required|integer|min:0',
        'seo.meta_title' => 'required|string|max:255',
        'seo.meta_description' => 'required|string|max:255',
    ];

    public function submitStep()
    {
        $this->validate($this->getCurrentStepValidationRules());

        if ($this->currentStep < 6) {
            $this->currentStep++;
        }
    }

    public function goToPreviousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function submitForm()
    {
        $this->validate();
        // Handle form submission logic
        session()->flash('message', 'Product created successfully!');
        return redirect()->route('admin.products.index');
    }

    protected function getCurrentStepValidationRules()
    {
        switch ($this->currentStep) {
            case 1:
                return [
                    'basicInfo.name' => 'required|string|max:255',
                    'basicInfo.slug' => 'nullable|string|max:255',
                    'basicInfo.sku' => 'nullable|string|max:255',
                    'basicInfo.tags' => 'nullable|string|max:255',
                    'basicInfo.category' => 'required|string',
                    'basicInfo.brand' => 'required|string',
                    'basicInfo.primary_image' => 'nullable|image|max:1024',
                    'basicInfo.gallery_images.*' => 'nullable|image|max:1024',
                    'basicInfo.video_url' => 'nullable|url',
                    'basicInfo.short_description' => 'required|string|max:500',
                    'basicInfo.long_description' => 'nullable|string|max:2000',
                ];
            case 2:
                return [
                    'inventory.stock' => 'required|integer|min:0',
                ];
            case 3:
                return [
                    'seo.meta_title' => 'required|string|max:255',
                    'seo.meta_description' => 'required|string|max:255',
                ];
            // Add cases for other steps
            default:
                return [];
        }
    }

    public function render()
    {
        return view('livewire.admin.catalog.product-create');
    }
}
