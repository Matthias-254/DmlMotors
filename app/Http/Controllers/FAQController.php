<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{
    public function index(){
        $faqs = FAQ::all();
        return view('faq.index', compact('faqs'));
    }

    public function create(){
        return view('faq.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq =new FAQ;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('faq.index');
    }
}
