<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForm;

class SplashController extends Controller
{
    //
    public function index()
    {
        return view('splash2017', ['success' => \Session::get('success', false)]);
    }

    public function postIndex(Request $request)
    {

        $sent = false;
        $secret = '6LeN4RIUAAAAAGS0AmAeVzVTOJ4haozlAfVBd2yH';

        $validator = \Validator::make($request->all(),
            [
                'fullname' => 'required',
                'email' => 'required|email',
                'comments' => 'required',
                //'g-recaptcha-response' => 'required|recaptcha'
            ],
            [
                'fullname.required' => 'A full name is required',
                'email.required' => 'An email address is required',
                'email.email' => 'A valid email is required',
                'comments.required' => 'A comment is required',
                'g-recaptcha-response.required' => 'Invalid reCAPTCHA response',
                'g-recaptcha-response.recaptcha' => 'Invalid reCAPTCHA response'
            ]
        );


        if ($validator->fails())
        {
            return redirect('/')->withErrors($validator)->withInput();
        }

        \Mail::to(env('CONTACT_EMAIL'))->send(new ContactForm($request->fullname, $request->email, $request->comments));

        return redirect('/')->with('success', true);

        //view('splash2017', ['success' => true]);

        //\Mail::to(env('CONTACT_EMAIL'))->send(new ContactForm($request->fullname, $request->email, $request->comment));


    }
}
