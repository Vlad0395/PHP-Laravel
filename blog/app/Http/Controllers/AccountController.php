<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $users = User::all();
        return view('account/account', compact('users'));
    }
    public function store(Request $request)
    {


        $users = User::all();
        $users->name = $request->name;
        $users->save();
        return redirect('/account/account');
    }
    public function edit(){
        $users = User::all();
        return view('account/edit', compact('users'));
    }
}
