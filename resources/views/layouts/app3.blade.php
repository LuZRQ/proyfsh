<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Consejos')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/consestyle.css') }}">
    @yield('page-styles')
</head>
<body class="bg-gray-100 text-gray-900">

<nav class="hero-section sticky top-0 bg-white shadow-md">
    <div class="hero-content flex items-center justify-between p-4">
        <a href="@yield('back_url', '/')" class="text-lg font-bold text-blue-200 hover:text-blue-800 flex items-center">
            <i class="bi bi-arrow-left mr-2"></i> 
        </a>
        <h2 class="text-2xl md:text-3xl font-bold text-blue-200">@yield('header_title')</h2>
    </div>
</nav>


<main class="container mx-auto px-4 py-10">
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