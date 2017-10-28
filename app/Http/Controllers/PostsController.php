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
        $slug = Posts::where('id', $request->post_id)->value('slug');

        $newComment = new Comment();
        $newComment->author = $request->name;
        $newComment->post_id = $request->post_id;
        $newComment->content = $request->content;
        $newComment->save();
        $request->session()->flash('alert-success', 'Комментарий добавлен успешно!');
        return redirect('/posts/'.$slug);
    }

    public function show($slug)
    {
        $post = Posts::with('comments')->where('slug', '=', $slug)->first();
        return view('partials.show')->with(compact('post'));
    }

    public function newpost(Request $request)
    {
        return view('partials.addpost');
    }

    public function savepost(Request $request)
    {
        $newPost = new Posts();
        $newPost->name = $request->name;
        $newPost->slug = $request->slug;
        $newPost->content = $request->content;

        if(isset($_FILES['photo'])) {
            $file = $_FILES['photo'];
            $tempName = $file['tmp_name'];
            $extention =  substr(strrchr($file['name'], '.'), 1);
            $newName = '/images/' . $request->slug . '_title.' . $extention;
            move_uploaded_file($tempName, public_path() . $newName);
            $newPost->img = $newName;
        }

        $newPost->save();
        $request->session()->flash('alert-success', 'Пост добавлен успешно!');
        return redirect('/posts/'.$request->slug);
    }
}
