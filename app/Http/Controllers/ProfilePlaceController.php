<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Models\City;

class ProfilePlaceController extends Controller
{
    public function index()
    {
//        $cities = City::all();
//
//        $region = [];
//
//        foreach ($cities as $val) {
//            array_push($region, $val->region);
//        }
//        $region = array_unique($region);
//        $region2 = [];
//        $num = 0;
//        foreach ($region as $val) {
//            $num++;
//            $el = [
//                'name' => $val,
//            ];
//            array_push($region2, $el);
//        }

        $categories = Categories::all();
        $regions = Region::all();
        $cities = City::all();
        return view('/profile-place-anad', compact('categories', 'regions','cities'));
    }
}
