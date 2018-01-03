<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showContent()
	{
		return view('about-us.index');
	}
}
