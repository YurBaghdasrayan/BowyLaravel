<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $active_products = Auth::user()->products();

        return view('home', compact('active_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateProductRequest $request)
    {


    }

    /**
     * @param CreateProductRequest $request
     * @return \Illuminate\Http\JsonResponse|void
     */
    public function store(CreateProductRequest $request)
    {
        $image = $request->file('image');
        $destinationPath = 'upload/';
        $originalFile = time().$image->getClientOriginalName();
        $image->move($destinationPath, $originalFile);
        $data = $request->all();
        $data['image'] =  $originalFile;
        $data['user_id'] =  Auth::user()->id;
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
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
