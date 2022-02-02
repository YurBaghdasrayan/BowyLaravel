<?php

namespace App\Http\Controllers;

use App\Models\RessetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RestorPasswordController extends Controller
{
    public function index()
    {
        return view('/restore-password');
    }

    public function CodeSend(Request $request)
    {
//        dd($request);
        $request->validate([
            'random_int' => 'required|numeric',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        $request->except("_token");
//        dd($request);
        $updatePassword = RessetPassword::where([
                'random_int' => $request->random_int,
                'password' => $request->password
            ])->get();
        if (!$updatePassword) {
            dd('error', 'Invalid code!');
        }

        $user = User::where('random_int', $request->random_int)->update(['password' => Hash::make($request->password)]);

        $delete = RessetPassword::where(['random_int' => $request->random_int])->delete();

        dd('message', 'Your password has been changed!');
    }
}
