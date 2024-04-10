<form method="post" action="">
    @csrf
    <input type="text" name="title" value="{{ $post->title }}"></br>

    <input type="text" name="desc" value="{{ $post->desc }}"></br>

    <textarea name="text">{{ $post->text }}</textarea></br>


    <input type="submit" value="Сохранить">
</form>
