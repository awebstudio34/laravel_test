<?php

namespace App\Http\Controllers;
use App\Comment;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function mymethod()
	{
		$table_test=Comment::select(['author','content'])->get();
		return view('header')->with('table',$table_test);
	}
}
