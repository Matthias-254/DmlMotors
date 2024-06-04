<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function about(){
        return view('info.about');
    }

    public function faq(){
        return view('info.faq');
    }

    public function contact(){
        return view('info.contact');
    }
}
