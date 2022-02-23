<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounController extends Controller
{
    public function index()
    {
        $products = Auth::user()->products()->get()->where('status', '=', true);
        $no_ative_products = Auth::user()->products()->get()->where('status', '=', false);

        return view('announcement', compact('products','no_ative_products'));
    }

    public function update(Request $request)
    {
                dd($request->price);
//        $data = $request->all();
//        dd($data);

        $user = auth()->user();
        $email = $request->email;
        $email_exist = User::where(['email' => $email, 'role_id' => '1'])->get();
        if (!$email_exist->isEmpty()) {

            $exist_data_id = $email_exist[0]->id;

            if (auth()->user()->id == $exist_data_id) {

                $update_data = [
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'number' => $request->number,
                    'image'=>$user_image,
                    'city'=>$request->city
                ];

                $update_success = $user->update($update_data);

                if ($update_success) {
                    return redirect('profile/settings')->with('status', 'Профиль обновлен!');

                } else {
                    return redirect('profile/settings')->with('error', 'что то пошло не так попробуйте снова');
                }

            } else {
                return redirect('profile/settings')->with('emailerror', 'этот емайл существует');
            }

        } else {

            $update_data = [
                'email' => $request->email,
                'name' => $request->name,
                'surname' => $request->surname,
                'number' => $request->number,
                'image'=> $user_image,
                'city' => $request->city
            ];

            $update_success = $user->update($update_data);

            if ($update_success) {
                return redirect('profile/settings')->with('status', 'Профиль обновлен!');
            } else {
                return redirect('profile/settings')->with('error', 'что то пошло не так попробуйте снова');
            }

        }
    }

}
