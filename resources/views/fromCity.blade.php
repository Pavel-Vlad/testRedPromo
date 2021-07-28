<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container mt-3">
    <nav>
        <ul>
            <li>
                <a href="/">
                    На главную
                </a>
            </li>
            <li>
                <a href="/news-all">
                    Все новости здесь
                </a>
            </li>
            <li>
                <a href="/news-all/kostroma">
                    Кострома
                </a>
            </li>
            <li>
                <a href="/news-all/irkutsk">
                    Иркутск
                </a>
            </li>
        </ul>
    </nav>
    <h1>Все новости города</h1>
    <div class="row">
        @foreach ($news as $item)
            <div class="col-4 mb-2">
                <a href="/news-item/{{$item->id}}">
                    <strong>
                        {{ $item->title }}
                    </strong>
                </a>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
