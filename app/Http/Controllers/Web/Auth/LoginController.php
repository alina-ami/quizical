<?php

namespace App\Http\Controllers\Web\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\Web\Auth\LoginRequest;
use App\Http\Requests\Web\Auth\RegisterRequest;

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

            return $user->getHomepageRedirect();
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

    public function doRegister(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $user->assignRole('customer');

        Auth::login($user, true);

        return $user->getHomepageRedirect();
    }
}
