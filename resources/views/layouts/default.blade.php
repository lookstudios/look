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
        <div id="app" v-cloak>
            @yield('content')
        </div>

        <script src="/js/app.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-89900339-1', 'auto');
          ga('send', 'pageview');
        </script>
    </body>
</html>