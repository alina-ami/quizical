<?php

namespace App\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Brans\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function google()
    {
        session()->put('user_type', 'customer');

        return Socialite::driver('google')->redirect();
    }

    public function login(Request $request)
    {
        return view('web.auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        if (
            Auth::attempt($request->only('email', 'password'))
        ) {
            $user = User::where('email', $request->email)->first();
            Auth::login($user, true);

            return $user->getHomepageRedirect();;
        }

        return redirect()
            ->back()
            ->withErrors(['password' => ['Invalid credentials.']])
            ->withInput();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function register(Request $request)
    {
        return view('web.auth.register');
    }
}