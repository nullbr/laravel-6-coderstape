<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.nav')
    @yield('content')
</body>
</html>
