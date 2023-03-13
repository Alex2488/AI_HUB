<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers () {
        $users = User::all();
        return view('admin.user.show_users', compact('users'));
    }

    public function showEditUser ($id) {
        $user = User::find($id);
        return view('admin.user.edit_user', compact('user'));
    }

    public function updateUser($id, Request $r)
    {
        $user = User::find($id);
        $user->name = $r->name;
        $user->email = $r->email;
        $user->role = $r->role;

        $user->save();

        $users = User::all();
        return view('admin.user.show_users', compact('users'));
    }


    public function deleteUser ($id) {


        User::find($id)->delete();

        return back();
    }


}
