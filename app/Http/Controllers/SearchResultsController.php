<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchResultsController extends Controller
{
    public function index(Request $request)
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
        $products = Product::where($sql)->simplePaginate(4);

        return view('search-results', compact('products'));
    }

    public function getCategories($id)
    {
        $products = Product::where('category_id', $id)->simplePaginate(4);

        return view('search-results', compact('products'));
    }
}
