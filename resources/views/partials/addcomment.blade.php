<br>
<div class="container">
    <form method="post" action="/addcomment" role="form">
        {{ csrf_field() }}
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="text" name="name" placeholder="Иван" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="content">Комментарий:</label>
            <textarea class="form-control" name="content" placeholder="Введите текст сообщения" id="content"></textarea>
        </div>
            <input class="btn btn-success" type="submit" name="submit" value="Отправить">
    </form>
</div>
