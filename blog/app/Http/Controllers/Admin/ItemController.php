<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Subscribe;
use App\Notifications\NewPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Category;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = Item::all();
        return view('admin.news.index',compact('news'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = new Item();
        $categories= Category::all();

        return view('admin.news.create' , compact('news','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new Item();

        $news->title = $request->title;
        $news->description = $request->description;
        $news->text = $request->text;
        $news->user_id = Auth::id();
        $news->imgPath = $request->filepath;
//        dd($request->all());
        $category = Category::find($request->category_id)->id;
//        dd($category);
        $news->category_id = $category;
        $news->save();

        $users = Subscribe::all();
        foreach($users as $user) {
            Notification::route('mail', $user->email)->notify(new NewPost($news));
        }
//        Notification::route('mail','ptashinskij.rostik@gmail.com')->notify(new NewPost($news));
        return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = Item::find($id);
        $categories= Category::all()->pluck('name');
        return view('admin.news.edit' , compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news =Item::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->text = $request->text;
        $news->imgPath = $request->filepath;
        $news->category = $request->category;
        $news->save();
        return redirect('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
    }
}
