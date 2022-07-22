<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
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

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function getRegister()
    {
        return view("auth.register");
    }
    public function postRegister(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'min:6']
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return $this->postLogin($request);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
