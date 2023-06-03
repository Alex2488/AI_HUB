<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index () {
        $users = User::all();
        return view('admin.user.show_users', compact('users'));
    }

    public function edit ($id) {
        $user = User::find($id);
        return view('admin.user.edit_user', compact('user'));
    }

    public function update($id, UserRequest $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        $user->save();

        $users = User::all();
        return view('admin.user.show_users', compact('users'));
    }

    public function delete ($id) {


        User::find($id)->delete();

        return back();
    }
}
