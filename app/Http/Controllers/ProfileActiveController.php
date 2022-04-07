<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileActiveController extends Controller
{
    public function index()
    {
        // TODO
            $products = Auth::user()->products()->where('status', '=', true)->simplePaginate(3);
            $no_ative_products = Auth::user()->products()->simplePaginate(4)->where('status', '=', false);

            return view('profile-active-ads', compact('products','no_ative_products'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return view('profile-active-ads');
    }
}
