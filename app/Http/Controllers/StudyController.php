<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function showContent()
	{
		return view('study-overseas.index');
	}

    public function australia()
	{
		return view('study-overseas.australia');
	}

    public function switzerland()
	{
		return view('study-overseas.switzerland');
	}
}