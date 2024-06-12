<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Composer;

class DashboardController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('admin.dashboard', Compact('contact'));
    }
}
