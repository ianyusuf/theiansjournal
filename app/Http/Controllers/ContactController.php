<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContent()
	{
		return view('contact-us.index');
	}

    public function create()
	{
		return view('contact-us.index');
	}

    public function store(ContactFormRequest $request)
    {
        \Mail::send('contact-us.index',
        array(
            'name' => $request->get('form_name'),
            'email' => $request->get('form_email'),
            'tel' => $request->get('form_tel'),
            'message' => $request->get('form_message')
        ), function($message)
    {
        $message->from($data['form_email']);
        $message->to('info@icedu.id')->subject('Web Message');
    });

        return \Redirect::route('contact-us.index')
      ->with('message', 'Your email has been sent');
    }
}
