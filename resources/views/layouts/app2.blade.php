<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Recetas')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style04.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
</head>
<body class="bg-gray-100">

<nav class="w-full sticky top-0 z-50 bg-purple-200 flex items-center px-4 py-3 shadow border-b-2 border-dashed border-purple-500">
    <a href="@yield('back_url', '/')" class="text-lg font-bold text-purple-900 hover:text-purple-700 transition">
        <i class="bi bi-arrow-left-circle text-2xl"></i>
    </a>
    <img src="{{ asset('img/iconogroup.png') }}" width="55" class="ml-4">
    <h1 class="t ml-4 text-xl font-bold">@yield('header_title')</h1>
</nav>


<main class="container mx-auto px-4 py-6">
    @yield('content')
</main>

<!-- Pie de página -->
<footer class="bg-black text-white py-6">
    <div class="container mx-auto px-4 text-center">
        <p class="text-gray-400 mb-4">&copy; 2024 Sweet Home. Todos los derechos reservados.</p>
        <div class="flex justify-center space-x-6 text-xl">
            <a href="#" class="text-gray-400 hover:text-white transition">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
                <i class="bi bi-twitter-x"></i>
            </a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>

