<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        foreach($posts as $post)
        {
            dump($post['attributes']);
            dump('------------------');
        }
    }
}
