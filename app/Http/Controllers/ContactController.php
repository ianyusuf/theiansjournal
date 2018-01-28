<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContent()
	{
		return view('contact.index');
	}

    public function sendEmail()
	{
		return view('email.index');
	}

	public function store(Request $request)
	{
	    $request->session()->flash('alert-success', 'Your email has been sent!');
	    return redirect()->route("contact.index");
	}
}
