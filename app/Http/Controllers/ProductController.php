<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request) {
        return view('product.search');
    }
    public function details(Product $product) {
        return view('product.details', compact('product'));
    }

}
