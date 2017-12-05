@extends('layouts.master')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <p>{{Session::get('success')}}</p>
        </div>
    @endif
    @foreach($posts as $post)
        <div class="article">
            <div class="photo"><img src="{{asset('images/'.$post->img)}}" width="130px" height="100px"
                                    class="img-rounded"></div>
            <div class="name_article">{{$post->name}}</div>
            <div class="created_date">{{$post->created_at}}</div>
            <div class="minicomment">{{$post->slug}}</div>
            <form method="post" action="{{ route('delete_post', ['id' => $post->id]) }}">
                <a class="btn btn-info mybtnposition" href="{{route('article_articlemethod',['id'=>$post->id])}}">Подробнее
                    ></a>
                <button type="submit" class="btn btn-danger mybtnposition">Удалить статью</button>
                {{method_field('DELETE')}}
                {{ csrf_field() }}
            </form>
        </div>
    @endforeach
@endsection