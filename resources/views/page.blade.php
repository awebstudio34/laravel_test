@extends('layouts.master')
@section('content')
@foreach($posts as $post)
<div class="article">
<div class="photo"><img src="{{asset('так-блэт.jpg')}}" width="130px" height="100px" class="img-rounded"></div>
<div class="name_article">{{$post->name}}</div>
<div class="created_date">{{$post->created_at}}</div>
<div class="minicomment">{{$post->slug}}</div>
<a class="btn btn-info mybtnposition" href="{{route('article_articlemethod',['id'=>$post->id])}}">Подробнее ><i class="icon-chevron-right"></i> </a>
</div>
@endforeach
@endsection