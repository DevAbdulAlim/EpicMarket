<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Category;

class AppLayout extends Component
{
    public function render(): View
    {
        // Fetch 10 categories from the database
        $categories = Category::take(10)->get();

        // Pass the categories to the view
        return view('layouts.app', ['categories' => $categories]);
    }
}
