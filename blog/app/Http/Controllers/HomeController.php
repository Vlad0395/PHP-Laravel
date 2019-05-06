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
        $news = Item::paginate(4);

        return view('main',compact('news'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();// знаки идут вторым параметром

        return view('category', compact('category'));
    }
    public function store(Request $request)
    {
        $news = new Item();
        $news->title = $request->title;
        $news->imgPath = $request->filepath;
        $news->save();
        return redirect('/');
    }
}
