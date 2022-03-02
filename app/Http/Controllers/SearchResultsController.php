<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchResultsController extends Controller
{
    public function index(Request $request)
    {
        $search_results = Product::where([
            'category_id' => $request->category,
            'city' => $request->city,
            'region' => $request->region
        ])->get();

        return view('search-results', compact('search_results',));
    }
}
