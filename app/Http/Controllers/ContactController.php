<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContent()
	{
		return view('contact.index');
	}

    public function getEmail()
	{
		return view('contact.index');
	}

    public function postEmail(Request $request)
    {
        $this->validate($request);
    }
}
