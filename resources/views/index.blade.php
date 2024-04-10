<!DOCTYPE html>
<html>

<head>
    <title> Список постов </title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-last-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Список постов</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Описание</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><a href="{{ route('show', ['id' => $post->id]) }}">{{ $post->title }}</a></td>
                <td> {{ $post->desc }}</td>
                <td><a href="{{ route('edit', ['id' => $post->id]) }}">Редактировать</a></td>
                <td><a href="{{ route('del', ['id' => $post->id]) }}">Удалить</a></td>

            </tr>
        @endforeach
    </table>
</body>

</html>
