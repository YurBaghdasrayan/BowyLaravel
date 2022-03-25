<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {

        try {
            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);

                return redirect('profile/place-anad');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('user'),
                    'image'=> 'profile.image.png',
                    'role_id' => Role::USER_ID,
                ]);

                Auth::login($createUser);

                return redirect('profile/place-anad');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
