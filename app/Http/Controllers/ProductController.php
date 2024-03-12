<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function details(Product $product) {
        return view('product.details', compact('product'));
    }

}