<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index(){
        $news = Item::paginate(5);
        return view('news/index', compact('news'));
    }
    public function store(Request $request)
    {
        $news = new Item();
        $author = Auth::id();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->author = $author;
        $news->imgPath = $request->filepath;
        $news->save();
        return redirect('/admin/news');
    }
}
