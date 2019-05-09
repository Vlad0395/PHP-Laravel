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

        $subscribe = new Subscribe;
        if($subscribe != $request){
            $subscribe->email = $request->email;
            $subscribe->save();
        }
        return redirect('/news');
    }

}
