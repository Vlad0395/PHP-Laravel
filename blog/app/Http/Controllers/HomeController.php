<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use function Sodium\compare;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rightSideItem = Item::orderBy('id', 'desc')->skip(1)->take(1)->first();
        $bottomItems = Item::orderBy('id', 'desc')->skip(2)->take(2)->get ();
        $main = Item::orderBy('id', 'desc')->take(1)->first();
        return view('main',compact('rightSideItem','bottomItems','main'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();// знаки идут вторым параметром

        return view('category', compact('category'));
    }
    public function store(Request $request)
    {

    }
}
