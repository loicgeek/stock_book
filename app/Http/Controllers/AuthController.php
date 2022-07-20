<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view("auth.login");
    }
    public function postLogin(Request $request)
    {
        $user = User::query()->where("email", $request->email)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'user does not exists']);
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Invalid credentials']);
        }
        Auth::login($user, $request->remember);

        return redirect()->intended("/");
    }

    public function getRegister()
    {
        return view("auth.register");
    }
    public function postRegister()
    {
        return view("auth.register");
    }
}
