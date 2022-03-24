<?php

namespace App\Http\Controllers;

use App\Models\CarsModel;
use App\Models\City;
use App\Models\Product;
use App\Models\Region;
use App\Models\Views;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnloggedUserController extends Controller
{
    public function index($status, $id)
    {
        $clientIP = request()->ip();

        $view = Views::where('product_id',$id)->where('ip_address',$clientIP)->get();

        if ($view->count() < 1){
            Views::create(['product_id'=>$id,'ip_address'=>$clientIP]);
        }

        $viewsCount = Views::where('product_id',$id)->count();

//        dd($clientIP.">>".$viewsCount.">>".$id);
        $unnlogeds = Product::with('user')->where('id', $id)->get();

        $regions = Region::all();
        $cities = City::all();
        $cars_models = CarsModel::all();
        $views_posts = Product::all();


        $products = "";
        $similar_product = "";
        $car_model = "";

        if ($status == true) {
            $products = Product::where('status', '=', true)->where('id', $id)->get();

        } else {
            $products = Product::where('status', '=', false)->where('id', $id)->get();
        }

        $arr = $products->toArray();

        if ($arr != []) {
            $car_model = $products[0]->car_model;
        }

        if ($products != "" && $car_model != "") {

            $similar_product = Product::where('car_model', '=', $car_model)
                ->where('id', '!=', $products[0]->id)
                ->get();
        }
        return view('/announcement-unlogged-user', compact('unnlogeds', 'viewsCount', 'similar_product'));
    }

    public function unloggedApi($status, $id)
    {
//        dd("asd");
        $post = Product::find($id);
        $post->views++;
        $post->save();
        $unnlogeds = Product::with('user')->where('id', $id)->get();

        $regions = Region::all();
        $cities = City::all();
        $cars_models = CarsModel::all();
        $views_posts = Product::all();


        $products = "";
        $similar_product = "";
        $car_model = "";

        if ($status == true) {
            $products = Product::where('status', '=', true)->where('id', $id)->get();

        } else {
            $products = Product::where('status', '=', false)->where('id', $id)->get();
        }

        $arr = $products->toArray();

        if ($arr != []) {
            $car_model = $products[0]->car_model;
        }

        if ($products != "" && $car_model != "") {

            $similar_product = Product::where('car_model', '=', $car_model)
                ->where('id', '!=', $products[0]->id)
                ->get();
        }
        return response()->json([$unnlogeds,$post,$similar_product]);
    }
}

