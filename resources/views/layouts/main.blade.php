<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
</head>

<body>
    @section('top')
    <!-- шапка -->
    @show

    <div class="container">
        @yield('content')
    </div>

    @section('bottom-navigation')
    <a href="/">заказы</a>
    <a href="/search">поиск</a>
    <a href="/add">добавить</a>
    <a href="/users">люди</a>
    <a href="/settings">настройки</a>
    @show
</body>

</html>