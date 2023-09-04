<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Authentication;

class AuthController extends Controller
{
    public function login()
    {
        return view('home.login');
    }

    public function loginAction(request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'email',
            ],
            'password' => [
                'required',
            ],
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (hash::check($request->password, $user->password)) {
                auth()->login($user, true);
                return redirect()->route('step.step_1');
            } else {
                return redirect()->route('account.login')->with('fail', 'Password not match');
            }
        } else {
            return redirect()->route('account.login')->with('fail', 'Check your email :v');
        }
    }

    public function signup()
    {
        return view('home.signup');
    }

    public function signupAction(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                'unique:users,email',
            ],
            'password' => [
                'required',
                'min:6',
            ],
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('index');
    }

    public function logoutAction(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        session()->flush();
        return redirect()->route('index');
    }
}
