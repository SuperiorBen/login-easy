<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function register(Request $request)
    {

        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        return redirect(route('privada'));
    }


    public function login(Request $request)
    {


        $credential = [
            "email" => $request->email,
            "password" => $request->password,
            //"active" => true
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credential, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('privada'));
        } else {
            return redirect(route('login'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect(route('login'));
    }
}
