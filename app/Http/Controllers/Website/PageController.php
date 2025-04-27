<?php

namespace App\Http\Controllers\Website;

use Illuminate\View\View;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Home
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function home(): View
    {
        return view('website.home');
    }

    /**
     * Features
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function features(): View
    {
        return view('website.features');
    }

    /**
     * Help Center
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function helpCenter(): View
    {
        return view('website.help-center');
    }

    /**
     * About
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function about(): View
    {
        return view('website.about');
    }

    /**
     * Contact
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function contact(): View
    {
        return view('website.contact');
    }

    /**
     * Terms of Use
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function termsOfUse(): View
    {
        return view('website.terms-of-use');
    }

    /**
     * Cookie Policy
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function cookiePolicy(): View
    {
        return view('website.cookie-policy');
    }

    /**
     * Privacy Policy
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function privacyPolicy(): View
    {
        return view('website.privacy-policy');
    }
}
