<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\CarsModel;
use App\Models\Categories;
use App\Models\City;
use App\Models\Product;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounController extends Controller
{
    public function index($status, $id)
    {
        $regions = Region::all();
        $cities = City::all();
        $cars_models = CarsModel::all();



        $products = "";
        $similar_product = "";
        $car_model = "";


        if ($status == true) {
            $products = Auth::user()->products()->where('status', '=', true)->where('id', $id)->get();


        } else {
            $products = Auth::user()->products()->where('status', '=', false)->where('id', $id)->get();

        }

        $arr = $products->toArray();
        //dd($arr);

        if($arr != []){
            $car_model = $products[0]->car_model;
        }

        if($products != "" && $car_model != ""){

            $similar_product = Product::where('car_model', '=', $car_model)->get();
        }
        return view('announcement', compact('products','similar_product','regions','cities','cars_models'));

    }

    public function update(UpdateProductRequest $request)
    {
        $data = $request->all();
        $update = Product::find($data['product_id']);
        $update->headline = $data['product_id'];
        $update->price = $data['price'];
        $update->car_model = $data['car_model'];
        $update->description = $data['description'];
        $update->body_type = $data['body_type'];
        $update->rudder = $data['rudder'];
        $update->year_of_issue = $data['year_of_issue'];
        $update->transmission = $data['transmission'];
        $update->save();

        return response()->json([
            'success' => true,
            'message' => 'update success',
        ], 200);

    }

}
