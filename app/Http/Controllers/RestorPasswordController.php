<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestorPasswordController extends Controller
{
    public function index()
    {
        return view('/restore-password');
    }

    public function CodeSend()
    {

    }
}
