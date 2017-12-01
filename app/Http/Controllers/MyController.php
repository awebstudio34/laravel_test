<?php

namespace App\Http\Controllers;
use App\Comment;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function mymethod()
	{
		$table_test=Comment::select(['author','content','id'])->get();
		return view('page')->with('table',$table_test);
	}
	public function articlemethod($id)
	{
		return view('article')->with('id',$id);
	}
}
