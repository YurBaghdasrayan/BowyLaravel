<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('/login');
    }

    public function postLogin(LoginRequest $request)
    {
        $data = $request->validated();


        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('/profile-active-ads');

        } else {

            return redirect('/login')->with('login_error', 'неверные данные');

        }

    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
