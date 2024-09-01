<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.page');
    }

    public function show($id)
    {
        return view('products.show.page');
    }
}
