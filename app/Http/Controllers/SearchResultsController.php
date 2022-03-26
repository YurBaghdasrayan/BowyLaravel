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
        $search_results = Product::where($sql)->get();

        return view('search-results', compact('search_results'));
    }

    public function getCategories($id)
    {
        $search_results = Product::where('category_id', $id)->get();

        return response('search-results', compact('search_results'));
    }
}
