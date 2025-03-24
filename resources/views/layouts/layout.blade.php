<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/images/masterfloor.ico') }}">
</head>
<body>
<header>
    <nav>
        <div>
            <img src="{{asset('assets/images/masterfloor.png')}}" alt="Логотип" width="75" >
        </div>
        <ul>
            <li><a href="{{ route('partners.index') }}">Партнеры</a> </li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>

</footer>
</body>
</html>
