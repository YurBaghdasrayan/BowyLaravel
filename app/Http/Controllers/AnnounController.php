<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\CarsModel;
use App\Models\Categories;
use App\Models\City;
use App\Models\Product;
use App\Models\Region;
use App\Models\User;
use App\Models\Views;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounController extends Controller
{
    public function index($status,$id)
    {
        //dd($id);

        $regions = Region::all();
        $cities = City::all();
        $cars_models = CarsModel::all();
        $views_posts = Product::all();

        $products = "";
        $similar_product = "";
        $car_model = "";

        if ($status == true) {
            $products = Auth::user()->products()->where('status', '=', true)->where('id', $id)->get();

        } else {
            $products = Auth::user()->products()->where('status', '=', false)->where('id', $id)->get();
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
        return view('announcement', compact('products', 'similar_product', 'regions', 'cities', 'cars_models',));

    }

    public function update(UpdateProductRequest $request)
    {
        $data = $request->all();
        $update = Product::find($data['product_id']);
        $update->headline = $data['headline'];
        $update->address = $data['address'];
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
            'message' => 'update success' . $data['rudder'] . ">>" . $data['product_id'],
        ], 200);
    }



//$update_product = Product::where('id', '=', $product_id)->update($update);

//        if ($update_product) {
//
//            return response()->json([
//                'success' => true,
//                'message' => 'update success',
//            ], 200);
//
//        } else {
//            return response()->json([
//                'success' => false,
//                'message' => 'incorrect data',
//            ], 422);
//        }
//    }

    public function ApiUpdate(Request $request)
    {
        $data = $request->all();

        $product_id = $data['product_id'];

        $update = array(
            'headline' => $data['headline'],
            'address' => $data['address'],
            'price' => $data['price'],
            'car_model' => $data['car_model'],
            'description' => $data['description'],
            'body_type' => $data['body_type'],
            'rudder' => $data['rudder'],
            'year_of_issue' => $data['year_of_issue'],
            'transmission' => $data['transmission'],
        );

        $update_product = Product::where('id', '=', $product_id)->update($update);

        if ($update_product) {

            return response()->json([
                'success' => true,
                'message' => 'update success',
            ], 200);

        } else {
            return response()->json([
                'success' => false,
                'message' => 'incorrect data',
            ], 422);
        }
    }
}
