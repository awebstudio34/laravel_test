@extends('layouts.master')

@section('content')
        <div class="row card">
            <br>
            <div>
                <img class="col-2 img-responsive card-img" src="{{ isset($post->img) ? asset('/') . $post->img : asset('images/surprised_cat.jpg')}}" alt="Статья {{ $post->name }}">
            </div>
            <div class="text-center">
                <h2  class="card-title">{{ $post->name }}</h2>
                <small  class="text-left">Добавлено: {{ date_format(date_create($post->updated_at), "d-m-Y") }}</small>
            </div>
            <div class="container-fluid card-text">
                    {!! $post->content !!}
            </div>
        </div>
        <br>
        <br>
        <div class="card">
            <ul class="list-group list-group-flush">
                <h4 class="text-center card-header">Комментарии:</h4>
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-9">{{ $comment->content }}</p>
                        <div class="col-3 text-right text-muted" style="border-left: 1px solid darkgray;">
                            <small class="col">Автор: <strong>{{ $comment->author }}</strong></small><br>
                            <small class="col">Дата: <strong>{{ date_format(date_create($comment->updated_at), "d-m-Y") }}</strong></small>
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
        @include('partials.addcomment')
@endsection
