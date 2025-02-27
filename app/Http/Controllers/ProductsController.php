<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showCategory($category)
    {
        return view('products', compact('category'));
    }
}