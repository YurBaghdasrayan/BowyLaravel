<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\City;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $product = Product::orderBy('id', 'DESC')->limit(8)->get();
        $regions = Region::all();
        $cities = City::all();
        return view('/home', compact('categories', 'product', 'regions', 'cities'));
    }

}
