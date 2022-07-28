<?php

namespace App\Http\Controllers\Brands\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function google()
    {
        session()->put('user_type', 'brand');

        return Socialite::driver('google')->redirect();
    }

    public function login(Request $request)
    {
        return view('brands.auth.login');
    }

    public function register(Request $request)
    {
        return view('brands.auth.register');
    }
}
