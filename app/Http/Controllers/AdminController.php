<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }

    public function store()
    {

    }

    public function destroy($id)
    {
        $users = User::where('id', $id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'successfully deletedsss'
        ], 200);
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/admin-login');
    }

    public function getUpdate()
    {
        $users = User::all();
        return view('admin.admin-update-users', compact('users'));
    }

    public function update(Request $request)
    {

        $data = $request->all();
        $update = User::find($data['user_id']);
        $update->name = $data['ClientName'];
        $update->price = $data['Email'];
        $update->car_model = $data['Surname'];
        $update->description = $data['Number'];
        $update->body_type = $data['City'];

        $update->save();

        return response()->json([
            'success' => true,
            'message' => 'update success',
        ], 200);
    }
}
