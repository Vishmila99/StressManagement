<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
   @stack('styles')
</head>

<body>
    @include('layouts.header')
    @yield('breadcrumb')
    @yield('content')
    @yield('footer')
</body>
@stack('scripts')
</html>
