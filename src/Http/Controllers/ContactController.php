<?php

namespace Simple\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Simple\Contact\Models\Contact;
use Simple\Contact\Mail\ContactMailable;
use Simple\Contact\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function store(ContactRequest $request)
    {
        $admin = config('contact.admin');
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name,$admin));
        Contact::create($request->all());
        return redirect(route('contact'))->with('success','Thanks for contact..!');
    }
}
