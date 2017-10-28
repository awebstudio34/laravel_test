@extends('layouts.master')

@section('content')
    <form method="post" action="/savepost" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
        <div class="form-group">
            <label for="name">Название статьи:</label>
            <input type="text" name="name" placeholder="Заголовок" class="form-control" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="slug">URL статьи:</label>
            <input type="text" name="slug" placeholder="article_title" class="form-control" id="slug"  value="{{ old('slug') }}">
        </div>
        <div class="form-group">
            <label for="photo">Титульное фото для статьи:</label>
            <input type="file" name="photo" class="form-control" id="photo">
        </div>
        <div class="form-group">
            <label for="content">Текст статьи:</label>
            <textarea class="form-control" name="content" placeholder="Введите текст статьи" id="content">{{ old('content') }}</textarea>
        </div>
        <input class="btn btn-success btn-block" type="submit" name="submit" value="Добавить статью">
    </form>
@endsection
