<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function __construct()
    {
        $routeName = Route::currentRouteName();
        $arr = explode('.', $routeName);
        $arr = array_map('ucfirst', $arr);
        $title = implode(' - ', $arr);
        View::share('title', $title);
    }
    public function index()
    {
        $admin = User::where('is_admin', 1)->get();
        return view('admincp.admin.index', [
            'admin' => $admin,
        ]);
    }

    public function create()
    {
        return view('admincp.admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $admin = new User();
        $admin->name = $data['name'];
        $admin->email = $data['email'];
        $admin->phoneNumber = $data['phoneNumber'];
        $admin->address = $data['address'];
        $admin->is_admin = $data['is_admin'];
        $admin->password = Hash::make($data['password']);
        $admin->save();
        return redirect()->route('admin.admin.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $admin = User::find($id);
        return view('admincp.admin.edit', [
            'admin' => $admin,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $admin = User::find($id);
        $admin->name = $data['name'];
        $admin->email = $data['email'];
        $admin->phoneNumber = $data['phoneNumber'];
        $admin->address = $data['address'];
        $admin->is_admin = $data['is_admin'];
        $admin->password = Hash::make($data['password']);
        $admin->save();
        return redirect()->route('admin.admin.index');
    }

    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect()->back();
    }
}