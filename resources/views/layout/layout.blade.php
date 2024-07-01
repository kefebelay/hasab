<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    @include('layout/nav')


    @yield('content')

    <script src="https://kit.fontawesome.com/bb71c3bb06.js" crossorigin="anonymous"></script>
    @include('layout/footer')
</body>



</html>
