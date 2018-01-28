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

    public function canada()
	{
		return view('overseas.canada');
	}

    public function switzerland()
	{
		return view('overseas.switzerland');
	}

    public function uk()
	{
		return view('overseas.uk');
	}

    public function usa()
	{
		return view('overseas.usa');
	}
}