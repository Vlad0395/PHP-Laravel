<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $users = User::all();

        return view('/account/account', compact('users'));
    }
    public function store(Request $request)
    {


        $users = User::all();
        $users->name = $request->name;
        $users->save();
        return redirect('/account');
    }
    public function edit(){
        $id = Auth::id();
        $user = User::find($id);
        return view('account/edit', compact('user'));
    }
    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->short_bio = $request->short_bio;
        $user->twitter = $request->twitter;
        $user->facebook = $request->facebook;
        $user->github = $request->github;
        $user->save();
        return redirect('/account/edit');

    }
}
