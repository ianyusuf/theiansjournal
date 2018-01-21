<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function showContent()
	{
		return view('overseas.index');
	}

    public function australia()
	{
		return view('overseas.australia');
	}

    public function switzerland()
	{
		return view('overseas.switzerland');
	}
}