<?php

namespace App\Http\Controllers\Website;

use Illuminate\View\View;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Index
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('website.blog.index');
    }

    /**
     * Show
     * 
     * @param string $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function show(string $slug): View
    {
        return view('website.blog.show');
    }
}
