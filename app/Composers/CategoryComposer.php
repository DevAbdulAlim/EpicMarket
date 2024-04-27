<?php

namespace App\Composers;

use Illuminate\View\View;
use App\Models\Category;

class CategoryComposer
{
    public function compose(View $view): void
    {
        // Fetch categories from the database
        $categories = Category::take(10)->get();

        // Bind the categories to the view
        $view->with('composerCategories', $categories);
    }
}
