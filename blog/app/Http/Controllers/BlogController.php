<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index(){

        $news = Item::orderBy('created_at', 'desc')->Paginate(5);

        foreach ($news as &$item) {
            $createdAt = Carbon::parse($item['created_at']);
            $item['publish_date'] = $createdAt->format('M d, Y');
        }
        return view('blog', compact('news'));
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
        return redirect('/news');
    }
}
