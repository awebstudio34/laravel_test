<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function mymethod()
	{
		$posts=Post::select(['id','name','slug','created_at'])->get();
		$table_test=Comment::select(['author','content','id'])->get();
		return view('page')->with('posts',$posts);
	}
	public function articlemethod($id)
	{
		
		$article=Post::find($id);
		return view('article')->with(['post'=>$article]);
	}
}
