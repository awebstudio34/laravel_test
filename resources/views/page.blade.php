@include('header')
@include('footer')
@yield('header')
@foreach($table as $line)
<div class="article">
<div class="photo"><img src="{{asset('так-блэт.jpg')}}" width="130px" height="100px" class="img-rounded"></div>
<div class="name_article">{{$line->author}}</div>
<div class="created_date">{{$line->content}}</div>
<div class="minicomment">kk</div>
<a class="btn btn-info mybtnposition" href="{{route('article_articlemethod',['id'=>$line->id])}}">Подробнее ><i class="icon-chevron-right"></i> </a>
</div>
@endforeach
@yield('footer')