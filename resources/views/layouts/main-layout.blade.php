<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>