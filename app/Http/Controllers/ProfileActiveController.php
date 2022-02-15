<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileActiveController extends Controller
{
    public function index()
    {

        if (Auth::user()->products()->count() >= 1) {


            $active_products = Auth::user()->products()->where('status', '=', 'active')->get();
            $noactive_products = Auth::user()->products()->where('status', '=', 'noactive')->get();


            return view('profile-active-ads', compact('noactive_products', 'active_products'));

        } else {

            return view('profile-active-ads');

        }

//        return view('profile-active-ads', compact('active_products'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return view('profile-active-ads');
    }
}
