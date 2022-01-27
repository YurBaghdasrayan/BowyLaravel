<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileActiveController extends Controller
{
    public function index()
    {
        return view('/profile-active-ads');
    }
}
