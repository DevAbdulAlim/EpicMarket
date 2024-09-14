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
    public $inventory = [
        'regular_price' => null,
        'sale_price' => null,
        'discount_price' => null,
        'cost_price' => null,
        'manage_stock' => false,
        'allow_backorders' => false,
        'stock_status' => 'in_stock',
        'stock_quantity' => 0,
        'low_stock_threshold' => null,
        'stock_reservation' => null,
        'taxable' => true,
        'tax_class' => 'standard',
        'downloadable' => false,
        'downloadable_files' => [],
        'download_expiration' => null,
        'download_limit' => null,
        'virtual_product' => false,
    ];

    public $seo = [
        'meta_title' => '',
        'meta_description' => '',
        'meta_keywords' => '',
        'schema_markup' => '',
        'canonical_url' => '',
        'og_tags' => '',
        'alt_text' => '',
    ];

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

        // Inventory section rules
        'inventory.regular_price' => 'required|numeric|min:0',
        'inventory.sale_price' => 'nullable|numeric|min:0|lt:inventory.regular_price',
        'inventory.discount_price' => 'nullable|numeric|min:0|lt:inventory.sale_price',
        'inventory.cost_price' => 'nullable|numeric|min:0',
        'inventory.manage_stock' => 'boolean',
        'inventory.allow_backorders' => 'boolean',
        'inventory.stock_status' => 'required|string|in:in_stock,out_of_stock,backorder',
        'inventory.stock_quantity' => 'required_if:inventory.manage_stock,true|integer|min:0',
        'inventory.low_stock_threshold' => 'nullable|integer|min:0',
        'inventory.stock_reservation' => 'nullable|integer|min:0',
        'inventory.taxable' => 'boolean',
        'inventory.tax_class' => 'required_if:inventory.taxable,true|string|in:standard,reduced,zero',
        'inventory.downloadable' => 'boolean',
        'inventory.downloadable_files.*' => 'nullable|file',
        'inventory.download_expiration' => 'nullable|integer|min:0',
        'inventory.download_limit' => 'nullable|integer|min:0',
        'inventory.virtual_product' => 'boolean',

        // SEO section rules
        'seo.meta_title' => 'required|string|max:255',
        'seo.meta_description' => 'required|string|max:255',
        'seo.meta_keywords' => 'nullable|string|max:255',
        'seo.schema_markup' => 'nullable|string',
        'seo.canonical_url' => 'nullable|url|max:255',
        'seo.og_tags' => 'nullable|string',
        'seo.alt_text' => 'nullable|string|max:255',
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
                    'inventory.regular_price' => 'required|numeric|min:0',
                    'inventory.sale_price' => 'nullable|numeric|min:0|lt:inventory.regular_price',
                    'inventory.discount_price' => 'nullable|numeric|min:0|lt:inventory.sale_price',
                    'inventory.cost_price' => 'nullable|numeric|min:0',
                    'inventory.manage_stock' => 'boolean',
                    'inventory.allow_backorders' => 'boolean',
                    'inventory.stock_status' => 'required|string|in:in_stock,out_of_stock,backorder',
                    'inventory.stock_quantity' => 'required_if:inventory.manage_stock,true|integer|min:0',
                    'inventory.low_stock_threshold' => 'nullable|integer|min:0',
                    'inventory.stock_reservation' => 'nullable|integer|min:0',
                    'inventory.taxable' => 'boolean',
                    'inventory.tax_class' => 'required_if:inventory.taxable,true|string|in:standard,reduced,zero',
                    'inventory.downloadable' => 'boolean',
                    'inventory.downloadable_files.*' => 'nullable|file',
                    'inventory.download_expiration' => 'nullable|integer|min:0',
                    'inventory.download_limit' => 'nullable|integer|min:0',
                    'inventory.virtual_product' => 'boolean',
                ];
            case 3:
                return [
                    'seo.meta_title' => 'required|string|max:255',
                    'seo.meta_description' => 'required|string|max:255',
                    'seo.meta_keywords' => 'nullable|string|max:255',
                    'seo.schema_markup' => 'nullable|string',
                    'seo.canonical_url' => 'nullable|url|max:255',
                    'seo.og_tags' => 'nullable|string',
                    'seo.alt_text' => 'nullable|string|max:255',
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
