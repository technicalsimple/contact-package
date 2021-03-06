<?php

namespace technicalsimple\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use technicalsimple\Contact\Models\Contact;
use technicalsimple\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'email' => 'required',
           'message' => 'required',
        ]);
        $admin = config('contact.admin');
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name,$admin));
        Contact::create($request->all());
        return redirect(route('contact'))->with('success','Thanks for contact..!');
    }
}
