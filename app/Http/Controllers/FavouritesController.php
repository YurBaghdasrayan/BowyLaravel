<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Favourites;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouritesController extends Controller
{


    public function index()
    {
        $auth_user_id = Auth::user()->id;
        $favourites = Favourites::with('product', 'user')->where('user_id', '=', $auth_user_id)->get();
        return view('/favourites', compact('favourites'));
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $token = $request['_token'];

        $token = auth()->user()->id;

        $product_id = $data['product_id'];
        Favourites::create([
            'user_id' => $token,
            'product_id' => $product_id
        ]);
        return response()->json('success');
    }
}
