<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProfilePlaceController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('/profile-place-anad',compact('category'));
    }
}
