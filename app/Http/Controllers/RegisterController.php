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
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index()
    {
        return view('/registration');
    }

    public function postSignup(UsersRequest $request)
    {
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->extension();
            $add_image = $image->storeAs('/uploads', $imageName);
            $data = [
                'email' => $request->email,
                'password' => $request->password,
                'role_id' => Role::USER_ID,
                'image' => $add_image
            ];
        } else {
            $data = [
                'email' => $request->email,
                'password' => $request->password,
                'role_id' => Role::USER_ID,
            ];
        }
        $user = User::create($data);

        if ($user) {
            return redirect('/login');
        } else {
            return redirect('/registration')->with('login_error', 'неверные данные');
        }

    }

}
