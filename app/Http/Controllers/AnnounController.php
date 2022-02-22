<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AnnounController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('/announcement',compact('product'));
    }

    public function getProduct(Product $product)
    {
        dd($product);
    }
}
