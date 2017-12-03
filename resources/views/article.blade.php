@extends('layouts.master')

@section('content')
@if($errors->any())
	<div class="alert alert-danger"><ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
{{--<div class="alert alert-success">
  Комментарий отправлен успешно.
</div>--}}
<div class="container">
<div class="articlepost row">
<div class="photopost col-xs-2"><img src="{{asset('так-блэт.jpg')}}" width="80px" height="80px" class="img-rounded"></div>
<div class="created_datepost col-xs-1">{{$post->created_at}}
<div class="name_articlepost">{{$post->name}}</div></div>
<div class="post_content col-xs-12">{{$post->content}}</div>
</div>
<div class="textt">Добавить новый комментарий</div>
<form method="post" action="{{route('addpost',['post_id'=>$post->id])}}" class="text-center forms_settings">
<input class="formm form-control" name="author" type="text" placeholder="Ваше имя"></input>
<textarea rows="3" name="content" class="formm form-control" placeholder="Ваш комментарий"></textarea>
<button type="submit" class="btn btn-default">Добавить</button>
{{ csrf_field() }}
</form>
@foreach($comments as $comment)
<div class="comment row">
<div class="human col-xs-3">{{$comment->author}}<p>{{$comment->created_at}}</p></div>
<div class="human col-xs-9">{{$comment->content}}</div>
</div>
@endforeach
</div>

@endsection