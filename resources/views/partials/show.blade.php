@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="col-2">
                <img width="100%" src="{{ asset('images/surprised_cat.jpg') }}" alt="Статья {{ $post->name }}">
            </div>
            <div class="col-10 text-center">
                <div class="row">
                    <div class="col">
                        <h2>{{ $post->name }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>Добавлено: {{ date_format(date_create($post->updated_at), "d-m-Y") }}</small>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                {!! $post->content !!}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h4 class="text-center">Комментарии:</h4>
            @foreach($post->comments as $comment)
            <div class="row">
                    <div class="col-10">
                        <p>{{ $comment->content }}</p>
                    </div>
                    <div class="col-2">
                        <div class="row"><small>Автор: {{ $comment->author }}</small></div>
                        <div class="row"><small>Дата: {{ date_format(date_create($comment->updated_at), "d-m-Y") }}</small></div>
                    </div>
            </div>
            <br>
            @endforeach
            </div>
        </div>

        @include('partials.addcomment')
@endsection
