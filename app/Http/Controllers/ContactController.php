<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContactController extends Controller
{

    // Create Contact Form
    public function createForm(Request $request)
    {
        return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);



        $email = $request->input('email');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('message');
        Mail::to($email)->send(new ContactFormMail($name, $subject, $phone, $message));

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
