<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email'=> 'required|email']);
        /*$email = request('email');
        dd($email);*/
        
        /*Mail::raw('It works mail', function ($message) {
            $message->to(request('email'))
                ->subject('Hello There');
        });
        return redirect('/contact')
            ->with('message', 'Email sent!');*/

        /*Mail::to(request('email'))
            ->send(new ContactMe('shirst'));*/
        Mail::to(request('email'))
            ->send(new Contact('shirst'));
        return redirect('/contact')
            ->with('message', 'Email sent!');
    }
}
