<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function contactform(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','email'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);


        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;


        $contact->save();
        // return redirect()->back()->with('status', 'New Project Added Sucessfully');
    }

    public function contacts()
    {
        $contatcs = Contact::orderBy('id', 'desc')->get();
        return view('admin_contacts',['contatcs' => $contatcs]);
    }
}
