<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request) {
        $products = Product::paginate(2);
        return view('product.search', compact('products'));
    }
    public function details(Product $product) {
        return view('product.details', compact('product'));
    }

}