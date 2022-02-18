<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileActiveController extends Controller
{
    public function index()
    {
        // TODO statusy
            $products = Auth::user()->products()->get()->where('status', '=', true);
            $products = Auth::user()->products()->get()->where('status', '=', false);

            return view('profile-active-ads', compact('products'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return view('profile-active-ads');
    }
}
