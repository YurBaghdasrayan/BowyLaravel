<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounController extends Controller
{
    public function index($status, $id)
    {
        $products = "";

        if ($status == true) {
            $products = Auth::user()->products()->where('status', '=', true)->where('id', $id)->get();
        } else {
            $products = Auth::user()->products()->where('status', '=', false)->where('id', $id)->get();
        }
        $similar_product = Product::where('car_model', '=', 'mercedes')->get();

        return view('announcement', compact('products','similar_product'));



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
