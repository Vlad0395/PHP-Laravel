<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewPost;
class SubscribeController extends Controller
{
    public function store(Request $request)
    {

        $subscribe = Subscribe::where('email','=',$request->email)->first();
//
        if(!$subscribe){
            Subscribe::create([
                'email'=>$request->email
            ]);

        }
        return redirect('/news');
    }

}
