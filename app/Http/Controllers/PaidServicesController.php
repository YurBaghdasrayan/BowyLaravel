<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaidServicesController extends Controller
{
    public function index()
    {
        return view('/paid-services');
    }
}
