<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileActiveController extends Controller
{
    public function index()
    {
        $active_products = Auth::user()->products()->where('status','=','active')->get();
        $noactive_products = Auth::user()->products()->where('status','=','noactive')->get();

        return view('profile-active-ads',compact('noactive_products','active_products'));
//        return view('profile-active-ads', compact('active_products'));
    }
}
