<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <h1>Задание 10.1</h1>
    <h1>{{ $title }}</h1>
    <p>{{ $content }}</p>
    <h1>Задание 10.2</h1>
    @foreach ($links as $link)
        <a href="{{ $link['href'] }}">{{ $link['text'] }}</a><br>
    @endforeach

    <h1>Задание 10.3</h1>

    <table>
        <tr>
            <th>№ п\п</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach ($users as $key => $user)
        <tr style="color: {{ $user['banned'] ? 'red' : 'green' }}">                <td>{{ $key + 1 }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                <td>
                    @if ($user['banned'])
                        забанен
                    @else
                        активен
                    @endif
                </td>
            </tr>
        @endforeach
        </table>
</body>

</html>
