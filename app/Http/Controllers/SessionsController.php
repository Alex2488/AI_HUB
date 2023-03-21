<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

//class SessionsController extends Controller
//{
//
//    public function create ()
//    {
//        return view('session.create');
//    }
//
//    /**
//     * @throws ValidationException
//     */
//    public function store ()
//    {
//        $attributes = request()->validate([
//            'email'=> 'required|exists:users,email',
//            'password'=>'required'
//        ]);
//
//        if (auth()->attempt($attributes)){
//
//            session()->regenerate();
//
//            return redirect('/')->with('success', 'Ви успішно авторизовані');
//        }
//
//        throw ValidationException::withMessages([
//            'email'=>'Не вірно введено електронну пошту або пароль',
//        ]);
//
// /*       return back()
//            ->withInput()
//            ->withErrors(['email'=>'Не вірно введено електронну пошту або пароль']);*/
//
//
//    }
//
//
//
//
//
//
//
//    public function destroy ()
//    {
//
//
//        auth()->logout();
//
//        return redirect(url('/'))->with('success', 'Goodbye!');
//
//
//    }
//
//
//
//
//}
