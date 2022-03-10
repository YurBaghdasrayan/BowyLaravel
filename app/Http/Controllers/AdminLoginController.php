<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.admin-login');
    }

    public function store(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            if (auth()->user()->role_id == 2) {
                return redirect('/admin/users');
            } else {
                return view('admin.admin.login')->with('errors', 'not admin !!!');
            }
        }
//        } else {
//            return redirect(route('admin.admin-login'))->with('errors', 'not admin !!!');
//        }


//        $data = $request->validated();
//
//        if ($request->rememberme) {
//            $remember = true;
//            if (Auth::attempt($data, $remember)) {
//                $request->session()->regenerate();
//                return redirect('/admin/login');
//
//            } else {
//                return redirect('/login')->with('login_error', 'неверные данные');
//            }
//        } else {
//            if (Auth::attempt($data)) {
//                $request->session()->regenerate();
//                return redirect('admin/login');
//            } else {
//                return redirect('/login')->with('login_error', 'неверные данные');
//            }
//        }
    }
}
