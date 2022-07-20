<html>
    <head>
        <title>{{env("APP_NAME")}} - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
       <link rel="stylesheet" href="{{asset('styles.css')}}">
      
    </head>
    <body>
        @yield('content')
    </body>
</html>