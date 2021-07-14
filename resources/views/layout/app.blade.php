<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Comics Page')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header id="site_header">
        <h1>Site header</h1>
    </header>
    <main id='site_main'>
        @yield('content')
    </main>
    <footer id="site_footer">
        <h1>Site footer</h1>
    </footer>
</body>
</html>