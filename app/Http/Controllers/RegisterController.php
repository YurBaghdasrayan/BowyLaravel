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

            $destinationPath = 'upload/';
            $originalFile = time().$image->getClientOriginalName();
            $image->move($destinationPath, $originalFile);

//            $imageName = time() . '.' . $image->extension();
//            $add_image = $image->storeAs('public/uploads', $imageName);

            $data = [
                'email' => $request->email,
                'password' => $request->password,
                'role_id' => Role::USER_ID,
                'image' => $originalFile
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
            return redirect('/login')->with('success','Вы успешно прошли регистрацию');
        } else {
            return redirect('/registration')->with('login_error', 'неверные данные');
        }

    }

}
