<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnounController extends Controller
{
    public function index()
    {
        return view('/announcement');
    }
}
