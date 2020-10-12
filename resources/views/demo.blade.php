<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css\app.css')}}">
    <title>Document</title>
</head>
<body>


<div class="container">

    <h1 class="text-right">Страница Макса</h1>

    <table class="table">
        <tr>
            <th>Номер</th>
            <th>Название</th>
            <th>Манипуляции</th>
        </tr>

        @foreach($car as $test)
            <tr>
                <td>{{ $test->id }}</td>
                <td>{{ $test->name }}</td>
                <td class="btn-group">
                    <form action="{{$test->id}}" method="get">
                        <button type="submit" class="btn-success">Edit</button>
                    </form>
                    <button class="btn-danger">X</button>
                </td>
            </tr>
        @endforeach
    </table>

</div>
</body>
</html>
