<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Image;
use App\Models\Product;
use App\Models\Region;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\City;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{

    public function index()
    {

    }

    public function create(CreateProductRequest $request)
    {

    }

    public function store(CreateProductRequest $request)
    {
//        $image = $request->file('image');
//        $destinationPath = 'public/uploads';
//        $originalFile = time() . $image->getClientOriginalName();
//        $image->storeAs($destinationPath, $originalFile);
        $data = $request->all();

//        dd($request);
//
//        $data['image'] = $originalFile;
        dd($request->image);
        if ($request->has('image')) {
            foreach ($request->file('image') as $images) {
                $destinationPath = 'public/uploads';
                $originalFile = time() . $images->getClientOriginalName();
                $images->storeAs($destinationPath, $originalFile);
                Image::create([
                    'user_id'=>$request->id,
                    'image'=>$originalFile
                ]);
            }
        }
        $data['user_id'] = Auth::user()->id;

        $city_id = $data['city'];
        $regionId_forThisCity = City::where('id', $city_id)->first();

        if ($data['region'] != $regionId_forThisCity->region_id) {
            return response()->json([
                'success' => false,
                'message' => 'The region is not found'
            ], 404);

        } else if (Product::query()->create($data)) {

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
