@extends('layouts.master')

@section('content')
  {{--  <style>
        * {
            border:1px solid gray;
        }
    </style>--}}
  @foreach($posts as $post)
        <a href="posts/{{ $post->slug }}">
            <div class="row card">
                <br>
                <div>
                    <img class="col-2 img-responsive card-img" src="{{ asset('images/surprised_cat.jpg') }}" alt="Статья {{ $post->name }}">
                </div>
                <div class="text-center" style="color: #2e3133; text-decoration: underline;">
                    <h2 class="card-title">{{ $post->name }}</h2>
                    <small class="card-text">Добавлено: {{ date_format(date_create($post->updated_at), "d-m-Y") }}</small>
                </div>
            </div>
        </a>
    <br>
  @endforeach
  <a href="/addpost" class="btn btn-success btn-block btn-lg">Добавить статью</a>
{{--    <table>
        @foreach($posts as $post)
            <tr style="background-color: #aaaaaa">
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Комментарии:</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach($post->comments as $comment)
                <tr style="background-color: #aaaaff">
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->author }}</td>
                    <td>{{ $comment->post_id }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->created_at }}</td>
                    <td>{{ $comment->updated_at }}</td>
                </tr>
            @endforeach
        @endforeach
    </table>--}}

@endsection
