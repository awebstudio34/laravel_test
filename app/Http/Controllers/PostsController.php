<?php

namespace App\Http\Controllers;

use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::with('comments')->all();
        dd($posts);
        //$posts = Posts::where('slug','name_2')->get();
        return view('partials.index')->with(compact('posts'));
    }
}
