<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $product = Product::simplePaginate(1);
        return view('/home', compact('categories', 'product'));
    }
}
