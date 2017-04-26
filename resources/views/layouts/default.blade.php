<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Look Studios</title>
        <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <script>
            window.Look = {
                'csrfToken': '{{ csrf_token() }}',
            };
        </script>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>