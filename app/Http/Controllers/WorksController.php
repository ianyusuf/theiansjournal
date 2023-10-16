<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function showContent()
	{
		return view('works.index');
	}

    public function xlaxiata()
	{
		return view('works.xlaxiata');
	}

    public function lokalewedding()
	{
		return view('works.lokalewedding');
	}

    public function icedu()
	{
		return view('works.icedu');
	}

    public function gigs()
	{
		return view('works.gigs');
	}
}