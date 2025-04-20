<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sweet Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

<header class="bg-red-800 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold"> @yield('header_title')</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-10">
    @yield('content')
</main>

    <!-- Pie de página -->
    <footer class="bg-red-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-gray-300">&copy; 2024 Sweet Home. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>