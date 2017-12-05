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
        $posts = Post::get();
        return view('page')->with(['posts' => $posts]);
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
        $this->validate($request, [
            'name' => 'required|max:255', 'slug' => 'required|max:255', 'content' => 'required', 'img' => 'required|image'
        ]);
        $filename = $request->file('img')->getClientOriginalName();//получаем имя файла с запроса
        $request->file('img')->move(public_path('images\\'), $filename);/*переносим временно скачанный файл
        в директорию public_path('images\\') и называем $filename*/
        //$newfile=public_path('images\\' . $_FILES['img']['name']);
        //move_uploaded_file($_FILES['img']['tmp_name'], $newfile);
        $post = new Post;
        $post->fill($request->all());

        //dump($request->file('img'));
        $post->save();
        $post->update(['img' => $filename]);

        $request->session()->flash('success', 'Ваша статья успешно добавлена');
        return redirect('/');
    }

    public function delete_comment(Comment $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function delete_post(Post $id)
    {
        $comments_for_post = $id->comments;//имеем доступ к коментам благодаря связям
        foreach ($comments_for_post as $comment) {
            $comment->delete();//удаляем комменты принадлежащие удаляемому айди статьи
        }
        Storage::disk('local')->delete($id->img);//удаляем картинку
        $id->delete();
        return redirect()->back();
    }

}
