<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

    @yield('content')
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
