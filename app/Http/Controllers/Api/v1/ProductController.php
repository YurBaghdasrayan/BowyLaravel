<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\City;
use App\Models\Favourites;
use App\Models\Product;
use App\Models\Views;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([
            'success' => 'true',
            'message' => 'All products',
            'data' => ProductResource::collection(auth()->user()->products)
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            ], 200);
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
        $product = Product::where('id', $id)->first();
        return response()->json([
            'success' => true,
            'message' => 'this is users product',
            $product,
        ]);

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
        $update = [
            'headline' => $request->headline,
            'address' => $request->address,
            'price' => $request->price,
            'car_model' => $request->car_model,
            'description' => $request->description,
            'body_type' => $request->body_type,
            'rudder' => $request->rudder,
            'year_of_issue' => $request->year_of_issue,
            'transmission' => $request->transmission,
        ];


        $update_product = Product::where('id', '=', $id)->update($update);
//        dd($update);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
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

    public function storeFavourite(Request $request)
    {
        $data = $request->all();
        $product_id = $request->product_id;
        Favourites::create([
            'user_id' => \auth()->id(),
            'product_id' => $product_id
        ]);
        return response()->json('success');
    }

    public function destroyFavourite($id)
    {
        $products = Product::where('id', $id)->first();
        if ($products) {
            $products
                ->favourites()
                ->where('user_id', \auth()->id())
                ->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'successfully deletedsss'
        ], 200);
    }

    public function indexFavourite()
    {
        $products = Product::whereHas('favourites', function ($query) {
            $query->where('user_id', '=', \auth()->id());
        })
            ->get();
        return response()->json([
            $products,
            'status' => true,
            'message' => 'user favourites posts'
        ]);
    }

    public function unlloggedIndex($status, $id)
    {
        $clientIP = request()->ip();

        $view = Views::where('product_id', $id)->where('ip_address', $clientIP)->get();

        if ($view->count() < 1) {
            Views::create(['product_id' => $id, 'ip_address' => $clientIP]);
        }

        $viewsCount = Views::where('product_id', $id)->count();

        $unnlogeds = Product::with('user')->where('id', $id)->get();

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
        return response()->json([
            $unnlogeds,
            $similar_product,
            $viewsCount
        ]);
    }

    public function searchResultIndex(Request $request)
    {
        $sql = array(
            'category_id' => $request->category,
        );

        if ($request->region) {
            $sql = array(
                'category_id' => $request->category,
                'region' => $request->region,
            );
        }

        if ($request->city) {
            $sql = array(
                'category_id' => $request->category,
                'region' => $request->region,
                'city' => $request->city,
            );
        }
        $search_results = Product::where($sql)->get();

        return response()->json([$search_results]);
    }

    public function getCategories($id)
    {
        $search_results = Product::where('category_id', $id)->get();

        return response()->json([$search_results]);
    }
}
