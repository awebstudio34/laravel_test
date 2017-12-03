<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyController extends Controller
{
    public function mymethod()
    {
        $posts = Post::select(['id', 'name', 'slug', 'img', 'created_at'])->get();
        $table_test = Comment::select(['author', 'content', 'id'])->get();
        return view('page')->with(['posts'=> $posts]);
    }

    public function articlemethod($id)
    {

        $article = Post::with('comments')->find($id);
        return view('article')->with(['post' => $article, 'comments' => $article->comments]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'author' => 'required|max:255', 'content' => 'required'
        ]);
        $comment = new Comment;
        $comment->fill($request->all());
        $comment->save();

        $request->session()->flash('success', 'Ваш комментарий успешно добавлен');

        return redirect()->back();
    }
    public function add_post()
    {
        return view('add_post');
    }
    public function add_post_data(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255', 'slug' => 'required|max:255', 'content'=>'required', 'img'=>'required'
        ]);
        $post=new Post;
        $post->fill($request->all());
        $post->save();
        $request->session()->flash('success', 'Ваша статья успешно добавлена');
        return redirect('/');
    }

}
