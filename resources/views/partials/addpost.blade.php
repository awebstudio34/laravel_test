@extends('layouts.master')

@section('content')
    <form method="post" action="/savepost" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Название статьи:</label>
            <input type="text" name="name" placeholder="Заголовок" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="slug">URL статьи:</label>
            <input type="text" name="slug" placeholder="article_title" class="form-control" id="slug">
        </div>
        <div class="form-group">
            <label for="content">Текст статьи:</label>
            <textarea class="form-control" name="content" placeholder="Введите текст статьи" id="content"></textarea>
        </div>
        <input class="btn btn-success btn-block" type="submit" name="submit" value="Добавить статью">
    </form>
@endsection
