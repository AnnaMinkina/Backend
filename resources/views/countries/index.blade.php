<!DOCTYPE html>
<html>

<head>
    <title> Страны и города </title>
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
    <h1>Страны и города</h1>
    @foreach ($countries as $country )
    <h2>{{$country->name}}</h2>
    <ul>
        @foreach ($country->cities as $city)
        <li>{{$city->name}} - {{$city->population}}</li>
        @endforeach
    </ul>
    @endforeach
</body>

</html>
