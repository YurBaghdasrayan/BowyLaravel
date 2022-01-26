<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UsersRequest;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('/registration');
    }

    public function postSignup(UsersRequest $request)
    {

        $data = $request->except(['password_confirmation', '_token']);
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = Role::USER_ID;

        $user = User::create($data);

        if ($user) {
            return redirect('/profile');
        } else {
            return redirect('/login')->with('login_error', 'неверные данные');
        }

    }

}
