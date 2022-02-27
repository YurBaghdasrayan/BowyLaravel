<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\Cookie;

class ProfilePlaceController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $regions = Region::all();
        $cities = City::all();
        return view('/profile-place-anad', compact('categories', 'regions', 'cities'));

    }
}
