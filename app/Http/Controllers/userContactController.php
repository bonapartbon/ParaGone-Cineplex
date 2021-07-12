<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class userContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());
        $details = Contact::latest()->get()->first();
        Mail::to('paragonecineplex@gmail.com')->send(new ContactMail($details));
        return redirect()->route('userContact')
            ->with('success', 'Message is submited successfully!');
    }
}
