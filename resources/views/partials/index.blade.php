@extends('layouts.master')

@section('content')
    <table>
        @foreach($posts as $post)
            <tr style="background-color: #aaaaaa">
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Комментарии:</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach($post->comments as $comment)
                <tr style="background-color: #aaaaff">
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->author }}</td>
                    <td>{{ $comment->post_id }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->created_at }}</td>
                    <td>{{ $comment->updated_at }}</td>
                </tr>
            @endforeach
        @endforeach
    </table>

    @include('partials.addcomment')
@endsection
