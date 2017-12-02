@include('header')
@include('footer')
@yield('header')
<div class="article">
<div class="photo"><img src="{{asset('так-блэт.jpg')}}" width="130px" height="100px" class="img-rounded"></div>
<div class="created_date">{{$post->created_at}}</div>
<div class="name_article">{{$post->name}}</div>
<div class="minicomment">{{$post->slug}}</div>
</div>
@yield('footer')