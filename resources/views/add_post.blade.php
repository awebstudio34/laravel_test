@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            @if($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-xs-12 text-center"><h2>Создать новую статью</h2></div>
            <div class="col-xs-12">
                <form class="" enctype="multipart/form-data" method="post" action="{{route('add_post_data')}}" class="">
                    <div class="form-group">
                        <label for="name"> Имя: </label>
                        <input class="form-control" name="name" type="text" placeholder="Наименование статьи">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="slug"> Короткое описание статьи: </label>
                        <input class="form-control" name="slug" type="text" placeholder="Короткое описание"> </input>
                    </div>
                    <div class="form-group">
                        <label for="content"> Подробное описание статьи: </label>
                        <textarea rows="3" name="content" class="form-control"
                                  placeholder="Подробный контент"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img"> Картинка новой статьи: </label>
                        <input name="img" type="file" accept="image/*" class="input-lg form-control">
                        </input>
                    </div>
                    <button type="submit" class="btn btn-default">Добавить</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection