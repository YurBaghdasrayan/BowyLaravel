<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $product = Product::where('user_id', $id)->delete();

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

    public function getUpdate($id)
    {
        if ($id) {
            $user = User::find($id);
            return view('admin.admin-update-users', compact('user'));
        } else
            return view('admin.admin-update-users');
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $update = User::find($data['user_id']);
        $update->name = $data['ClientName'];
        $update->email = $data['Email'];
        $update->surname = $data['Surname'];
        $update->number = $data['Number'];
        $update->city = $data['City'];

        $update->save();

        return response()->json([
            'success' => true,
            'message' => 'update success',
        ], 200);
    }

    public function getProductsPage()
    {
        $product = Product::all();
        return view('admin.product-delete', compact('product'));
    }

    public function productsDestroy($id)
    {

        Product::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'successfully deleteds'
        ], 200);
    }

    public function getProducts($id)
    {
        $productsUpdate = Product::find($id);
        return view('admin.product-delete', compact('productsUpdate'));
    }

    public function updateProducts()
    {

    }
}
