<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounController extends Controller
{
    public function index()
    {
        $products = Auth::user()->products()->get()->where('status', '=', true);
        $no_ative_products = Auth::user()->products()->get()->where('status', '=', false);

        return view('announcement', compact('products','no_ative_products'));
    }

//    public function update(Product $product)
//    {
//
//    }

}
