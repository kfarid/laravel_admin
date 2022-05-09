<?php

namespace App\Http\Controllers;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('front.index');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        ContactForm::create($input);

        //  Send mail to admin
        \Mail::send('mail.contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('admin@admin.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->withSuccess('Your message has been sent. Thank you!');
    }
}
