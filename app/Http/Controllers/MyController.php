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
		$comment_for_post=Comment::where('post_id',$id)->get();
		return view('article')->with(['post'=>$article, 'comments'=>$comment_for_post]);
	}
	public function add(Request $request)
	{
		$this->validate($request, [
		'author'=>'required|max:255','content'=>'required'
		]);
		$temp=$request->all();
		$comment=new Comment;
		$comment->fill($temp);
		$comment->save();
		return redirect()->back();
	}
	
}
