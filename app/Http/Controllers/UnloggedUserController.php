<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UnloggedUserController extends Controller
{
    public function index($id)
    {
        $unnlogeds = Product::where('id',$id)->get();
//        dd($unnloged);


        return view('/announcement-unlogged-user',compact('unnlogeds'));

    }
}
