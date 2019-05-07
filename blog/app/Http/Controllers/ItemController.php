<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ItemController extends Controller
{
    //
    public function index(){

        $news = Item::orderBy('created_at', 'desc')->Paginate(5);

        foreach ($news as &$item) {
            $createdAt = Carbon::parse($item['created_at']);
            $item['publish_date'] = $createdAt->format('M d, Y');
        }
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
        return redirect('/news');
    }
    public function show($id){
//        dd('asf');
        $item = Item::find($id);

            $createdAt = Carbon::parse($item['created_at']);
            $item['publish_date'] = $createdAt->format('M d, Y');

        return view('news/item', compact('item'));
    }
}
