<?php

namespace App\Http\Controllers;
use resources\views;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function mymethod()
	{
		return view('myview');
	}
}
