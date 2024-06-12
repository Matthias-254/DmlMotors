<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ContactController extends Controller
{

    public static function middleware(): array
    {
        return [
            new Middleware('auth'),
        ];
    }

    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){

        $request->validate([
            'message' => 'required',
        ]);

        $contact =new Contact;
        $contact->message = $request->message;
        $contact->user_id = auth()->user()->id;
        $contact->save();
        return redirect()->route('dashboard');
    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('admin.dashboard');
    }
}
