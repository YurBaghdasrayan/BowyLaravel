<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\City;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Categories::all();
        $product = Product::simplePaginate(1);
        $regions = Region::all();
        $cities = City::all();
        return view('/home', compact('categories', 'product', 'regions', 'cities'));
    }

}
