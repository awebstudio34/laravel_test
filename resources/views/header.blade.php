@section('header')
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap-theme.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.js')}}"></script>

</head>
<body>
<div class="head">
    <div class="headstyle"><a href={{ asset('') }}>Главная страница</a></div>
    <div class="headstyle"><a href={{ asset('') }}>Добавить статью</a></div>
</div>
@endsection
