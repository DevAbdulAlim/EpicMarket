<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request) {
        // Initialize query builder
        $query = Product::query();

        // Filter by category
        if ($request->has('categories')) {
            $categories = explode(',', $request->categories);
            $query->whereHas('category', function ($categoryQuery) use ($categories) {
                $categoryQuery->whereIn('slug', $categories);
            });
        }

        // Filter by product name
        if ($request->filled('product')) {
            $query->where('name', 'like', '%' . $request->product . '%');
        }

        // Filter by minPrice
        if ($request->filled('minPrice')) {
            $query->where('price', '>=', $request->minPrice);
        }

        // Filter by maxPrice
        if ($request->filled('maxPrice')) {
            $query->where('price', '<=', $request->maxPrice);
        }

        // Sort by sortBy and sortDirection
        if ($request->filled('sortBy') && in_array($request->sortBy, ['price', 'created_at'])) {
            $sortDirection = $request->sortDirection === 'asc' ? 'asc' : 'desc';
            $query->orderBy($request->sortBy, $sortDirection);
        }

        // Retrieve paginated products
        $products = $query->paginate(10);

        // Append query parameters to pagination links
        $products->appends($request->except('page'));

        // Return view with products data
        return view('product.search', compact('products'));
    }

    public function details(Product $product) {
        return view('product.details', compact('product'));
    }

}
