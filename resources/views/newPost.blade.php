
<form method="post" action="/post/new">
    @csrf
    <input type="text" name="title" placeholder="Заголовок"><br>
    <input type="text" name="desc" placeholder="Описание"><br>
    <textarea name="text" placeholder="Текст"></textarea>
    <br>
    <button type="sumbit">Создать пост</button>
</form>
