<?php

namespace App\Http\Controllers\Website;

use Illuminate\View\View;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Sign In
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function signIn(): View
    {
        return view('website.auth.sign-in');
    }

    /**
     * Sign Up
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function signUp(): View
    {
        return view('website.auth.sign-up');
    }

    /**
     * Forgot Password
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function forgotPassword(): View
    {
        return view('website.auth.forgot-password');
    }
}
