<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
    @include('layouts.foot')
</html>
