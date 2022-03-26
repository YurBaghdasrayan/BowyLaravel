<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
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
//        $active_products = Auth::user()->products()->where('status', '=', true);
//        $path = storage_path() . "/test.json";
//
//        $json = json_decode(file_get_contents($path), true);
//        dd($json);
//
//        foreach ($json as $val) {
//
//        }

//        $regions = Region::all();
//        return view('profile-place-anad',compact('regions'));

    }

    public function create(CreateProductRequest $request)
    {

    }

    public function store(CreateProductRequest $request)
    {
        $image = $request->file('image');
        $destinationPath = 'public/uploads';
        $originalFile = time() . $image->getClientOriginalName();
        $image->storeAs($destinationPath, $originalFile);
        $data = $request->all();

        $data['image'] = $originalFile;
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

//    public function storeApi(Request $request)
//    {
//        $image = $request->file('image');
//        $destinationPath = 'public/uploads';
//        $originalFile = time().$image->getClientOriginalName();
//        $image->storeAs($destinationPath, $originalFile);
//        $data = $request->all();
//
//        $data['image'] = $originalFile;
//        $city_id = $data['city'];
//        $regionId_forThisCity = City::where('id', $city_id)->first();
//
//        if ($data['region'] != $regionId_forThisCity->region_id) {
//            return response()->json([
//                'success' => false,
//                'message' => 'The region is not found'
//            ], 404);
//
//        } else if (Product::query()->create($data)) {
//
//            return response()->json([
//                'success' => true,
//                'message' => 'product was successfully created'
//            ], 201);
//        }
//    }
}
