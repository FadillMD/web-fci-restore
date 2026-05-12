<!-- File: resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    {{-- <title>{{ config('app.name', 'PT. First Cable Industries') }}</title> --}}
    <title>{{ $title ?? 'PT. First Cable Industries' }}</title>

    @fonts
    <!-- Menambahkan Font Google (Inter) agar terlihat lebih korporat -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased text-gray-800 bg-gray-50">

    <!-- Memanggil komponen Navbar -->
    <x-navbar />

    <!-- Area ini akan diisi oleh konten dari halaman lain -->
    <main>
        {{ $slot }}
    </main>

    <!-- Memanggil komponen Footer -->
    <x-footer />

</body>
</html>