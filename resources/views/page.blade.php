@yield('header')
@foreach($table as $line)
<div class="article">
<div class="photo"><img></img></div>
<div class="name_article">{{$line->author}}</div>
<div class="created_date">{{$line->content}}</div>
<div class="minicomment">kk</div>
</div>
@endforeach

@yield('footer')