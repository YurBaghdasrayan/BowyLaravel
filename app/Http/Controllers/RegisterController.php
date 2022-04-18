<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiRegistrationRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UsersRequest;
use App\Jobs\RegisteredSuccessEmailJob;
use App\Mail\RegisteredSuccessFullyMail;
use App\Models\Role;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use PhpParser\Parser\Multiple;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function postSignup(UsersRequest $request)
    {
        $image = $request->file('image');

        if ($image) {
            $destinationPath = 'public/uploads';
            $originalFile = time() . $image->getClientOriginalName();
            $image->storeAs($destinationPath, $originalFile);

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
            RegisteredSuccessEmailJob::dispatch($user);
            return redirect('/login')->with('success', 'Вы успешно прошли регистрацию');
        } else {

            return redirect('/registration')->with('login_error', 'неверные данные');
        }
    }

    public function storeApi(ApiRegistrationRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => Role::USER_ID,
            'number' => $request->number,
            'name' => $request->name,
        ];
        dd($data);

        $user = User::create($data);
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'user successfuly registered'
            ], 200);
        } else {
            return response()->json([
                'success' => false
            ], 401);
        }
    }
}
