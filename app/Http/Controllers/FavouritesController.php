<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    public function index()
    {
        return view('/favourites');
    }

    public function store(CreateProductRequest $request){

        $image = $request->file('image');
        dd($image);

        $products = $request->validated();


//
//        $destinationPath = 'upload/';
//        $originalFile = time().$image->getClientOriginalName();
//        $image->move($destinationPath, $originalFile);
//        dd($products);
        $create = Product::create($products);
        return redirect('profile-place-anad')->with('success', 'asdasdasds!');
    }
}
