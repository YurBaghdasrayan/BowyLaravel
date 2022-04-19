<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\City;
use App\Models\Image;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        //$product = Product::with('image')->orderBy('id', 'DESC')->cursorPaginate(2);
        $product = Product::with('image')->orderBy('id', 'DESC')->where('status',true)->paginate(4);
        $regions = Region::all();
        $cities = City::all();
        return view('/home', compact('categories', 'product', 'regions', 'cities'));
    }
    public function homeApi(){
        $categories = Categories::all();
        //$product = Product::with('image')->orderBy('id', 'DESC')->cursorPaginate(2);
        $product = Product::with('image')->orderBy('id', 'DESC')->where('status',true)->paginate(4);
        $regions = Region::all();
        $cities = City::all();

        return response()->json([$categories,$product,$regions,$cities]);
    }

}
