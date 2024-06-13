<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InfoController extends Controller
{
    public function about(){
        return view('info.about');
    }

    public function userlist(){
        $users = User::orderBy('name')->get();
        return view('info.userlist', compact('users'));
    }
}
