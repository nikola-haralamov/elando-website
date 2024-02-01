<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=DM+Sans" />
    <link rel="icon" type="image/svg+xml" href="./static/logo.svg" />
    @vite('resources/assets/styles/app.scss')
    @inertiaHead
</head>
<body>
@inertia
@vite('resources/scripts/app.js')
</body>
</html>
