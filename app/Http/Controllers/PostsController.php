<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Comment;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::with('comments')->get();
        //$posts = Posts::where('slug','name_2')->get();
        return view('partials.index')->with(compact('posts'));
    }

    public function save(Request $request)
    {
        $newComment = new Comment();
        $newComment->author = $request->name;
        $newComment->post_id = $request->post_id;
        $newComment->content = $request->content;
        $newComment->save();
        $request->session()->flash('alert-success', 'Комментарий добавлен успешно!');
        return redirect('/post-list');
    }
}
