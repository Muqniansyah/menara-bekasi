<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- judul -->
    <title>PT. Menara Bekasi</title>
    <!-- icon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <!-- tailwind css -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">

    <!-- my CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="font-family: Inter, sans-serif;">
    @include('layout.navbar')

    <main>
        @yield('content')
    </main>

    @include('layout.footer')
</body>

</html>