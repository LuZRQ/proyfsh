<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <!-- Estilos -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/nov.css') }}"/>
  @yield('page-styles')
</head>
<body class="bg-gray-100 text-gray-900">
<!-- Encabezado con estilo colorido -->
<div class="container-fluid">
    <header class="row">
        <div class="col-12">
            <nav class="py-0 fixed-top navbar navbar-expand-lg ">
                <div class="container d-flex align-items-center justify-content-between">
                    <a href="{{ url('/') }}"  class="navbar-brand fw-bold d-flex align-items-center mod ">
                        <img src="img/logo1P.png" width="70" class="me-3">
                        <div>
                            <h1 class="t mb-0">Sweet Home</h1>
                            <p class="text-sm text-danger mb-0 tagline">Tu guía para una vida más saludable</p>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="{{ url('/') }}"  class="nav-link ">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('recetas') }}"  class="nav-link ">Recetas</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('consejos') }}" class="nav-link ">Consejos de Nutrición</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('planificacion') }}" class="nav-link ">Plan de Comidas</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blog') }}" class="nav-link ">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contacto') }}" class="nav-link ">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sobreNosotros') }}" class="nav-link ">Sobre Nosotros</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>


  <!-- Aquí se insertará el contenido específico de cada página -->
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
    <!-- Scripts de Bootstrap -->
    <script src="js/scriptcoment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
