<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public  function show()
    {
        return view('welcome');
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();// знаки идут вторым параметром

        return view('category', compact('category'));
    }
}
