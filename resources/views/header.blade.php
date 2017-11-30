@include('footer')
@extends('page')

@section('header')
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
</head>
<body>
<div class="head"><div class="headstyle"><a href={{ asset('') }}>Главная страница</a></div><div class="headstyle"><a href={{ asset('') }}>Добавить статью</a></div><div class="headstyle"><a href={{ asset('') }}>Удалить статью</a></div></div>
@endsection
