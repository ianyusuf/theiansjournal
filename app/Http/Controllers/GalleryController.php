<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showContent()
	{
		return view('gallery.index');
	}
}