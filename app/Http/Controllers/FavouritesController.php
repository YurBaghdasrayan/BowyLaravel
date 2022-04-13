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
        $products = Product::whereHas('favourites', function ($query) {
            $query->where('user_id', '=', \auth()->id());
        })->paginate(3);
        return view('/favourites', compact('products'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $product_id = $data['product_id'];
        Favourites::create([
            'user_id' => \auth()->id(),
            'product_id' => $product_id
        ]);
        return response()->json('success');
    }

    public function destroy($id)
    {
        $products = Product::where('id', $id)
            ->first()
            ->favourites()
            ->where('user_id', \auth()->id())
            ->delete();
        return response()->json([
            'success' => true,
            'message' => 'successfully deleted'
        ], 200);
    }

    public function destroyFavourite($id)
    {
        $products = Product::where('id', $id)
            ->first()
            ->favourites()
            ->where('user_id', \auth()->id())
            ->delete();
        return response()->json([
            'success' => true,
            'message' => 'successfully deletedsss'
        ], 200);
    }
}
