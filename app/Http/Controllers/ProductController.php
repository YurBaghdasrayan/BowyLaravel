<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\City;

class ProductController extends Controller
{

    public function index()
    {
//        $active_products = Auth::user()->products()->where('status', '=', true);
//        $path = storage_path() . "/test.json";
//
//        $json = json_decode(file_get_contents($path), true);
//
//
//        foreach ($json as $val) {
//          dump($val->district);
//        };die;
        $regions = Region::all();
        return view('profile/place-anad');

    }

    public function create(CreateProductRequest $request)
    {

    }

    public function store(CreateProductRequest $request)
    {
        $image = $request->file('image');
        $destinationPath = 'upload/';
        $originalFile = time() . $image->getClientOriginalName();
        $image->move($destinationPath, $originalFile);
        $data = $request->all();
        $data['image'] = $originalFile;
        $data['user_id'] = Auth::user()->id;
        if (Product::query()->create($data)) {
            return response()->json([
                'success' => true,
                'message' => 'product was successfully created'
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if (Product::query()->where('id', $id)->delete()) {
            return response()->json([
                'success' => true,
                'message' => 'Product was successfully deleted'
            ], 200);
        }
    }
}
