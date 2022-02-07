<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class ProfilePlaceController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('/profile-place-anad',compact('categories'));
    }
}
