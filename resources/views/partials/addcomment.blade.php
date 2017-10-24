<br>
<form method="post" action="/addcomment">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="Иван"><br><br>
    <select name="post_id">
        @foreach($posts as $post)
            <option value="{{ $post->id }}">{{ $post->id }}</option>
        @endforeach
    </select><br><br>
    <textarea name="content" placeholder="Введите текст сообщения"></textarea><br><br>
    <input type="submit" name="submit" value="Отправить">
</form>
