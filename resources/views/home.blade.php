@extends('layouts.app')

@section('title', 'Inicio - Sweet Home')
     

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ideanov.css') }}" />
   
@endsection

@section('content')
<div class="container mx-auto px-4 py-16 ">
<!-- Carrusel de Bootstrap -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
    <div class="carousel-inner">
        <div class="carousel-item active custom-caption">
            <img src="{{ asset('img/Print1.png') }}" class="d-block w-100 img-fluid" alt="Imagen 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Print2.png') }}" class="d-block w-100 img-fluid" alt="Imagen 2">
            <div class="carousel-caption d-block">
                <p class="mb-6">Explora nuestra colección de recetas saludables y encuentra inspiración para tus comidas diarias.</p>
                <a href="{{ route('recetas') }}"><button class="button-89" role="button">Explora Recetas</button></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Print3.png') }}" class="d-block w-100 img-fluid" alt="Imagen 3">
            <div class="carousel-caption d-block">
                <p class="mb-8">Descubre consejos prácticos para mejorar tu alimentación y llevar un estilo de vida más saludable.</p>
                <a href="{{ route('consejos') }}"><button class="button-89" role="button">Explorar Consejos</button></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/printOp.png') }}" class="d-block w-100 img-fluid" alt="Imagen 4">
            <div class="carousel-caption d-block">
                <p class="mb-6">Encuentra planes de comidas equilibrados para toda la semana, con recetas fáciles y nutritivas.</p>
                <a href="{{ route('planificacion') }}"><button class="button-89" role="button">Ver Planes de Comidas</button></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Print5.png') }}" class="d-block w-100 img-fluid" alt="Imagen 5">
            <div class="carousel-caption d-block">
                <p class="mb-6">Encuentra artículos inspiradores, consejos de expertos y mucho más sobre alimentación saludable.</p>
                <a href="{{ route('blog') }}"><button class="button-89" role="button">Leer Artículos</button></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Print6.png') }}" class="d-block w-100 img-fluid" alt="Imagen 6">
            <div class="carousel-caption d-block">
                <p class="mb-8">¿Tienes alguna pregunta, comentario o sugerencia? No dudes en ponerte en contacto con nosotros.</p>
                <a href="{{ route('contacto') }}"><button class="button-89" role="button">IR</button></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Print7.png') }}" class="d-block w-100 img-fluid" alt="Imagen 7">
            <div class="carousel-caption d-block">
                <p class="mb-8">Estamos dedicados a ayudarte a llevar una vida saludable a través de la buena alimentación y el bienestar general.</p>
                <a href="{{ route('sobreNosotros') }}"><button class="button-89" role="button">IR</button></a>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

 <!-- Recetas Destacadas -->
 <section id="destacados" class="mb-10 mt-6">
        <h2 class="text-2xl font-bold text-green-700 mb-6 text-center">Recetas Destacadas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md transition hover:shadow-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Lemon Cookies (Galletas de Limón)</h3>
                <p class="text-gray-700 mb-4">Una deliciosa y nutritiva opción para cualquier momento del día.</p>
                <a href="{{ route('postres.lemonCo') }}" class="text-green-500 hover:text-green-700 font-semibold">Ver Receta</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md transition hover:shadow-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Smoothie Verde (Batido Verde)</h3>
                <p class="text-gray-700 mb-4">Un refrescante y saludable smoothie lleno de vitaminas.</p>
                <a href="{{ route('bebidas.smoV') }}" class="text-green-500 hover:text-green-700 font-semibold">Ver Receta</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md transition hover:shadow-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Lasaña de Espinacas y Queso Cheddar</h3>
                <p class="text-gray-700 mb-4">Un plato principal nutritivo y fácil de preparar.</p>
                <a href="{{ route('almuerzos.espagV') }}" class="text-green-500 hover:text-green-700 font-semibold">Ver Receta</a>
            </div>
        </div>
    </section>

    <!-- Consejos de Nutrición -->
    <section id="consejos" class="mb-10">
        <h2 class="text-2xl font-bold text-yellow-700 mb-6 text-center">Consejos de Nutrición</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md transition hover:shadow-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Los Beneficios de una Dieta Balanceada</h3>
                <p class="text-gray-700 mb-4">Descubre cómo una dieta equilibrada puede mejorar tu salud general.</p>
                <a href="{{ route('consejos') }}" class="text-yellow-700 hover:text-yellow-500 font-semibold">Leer Más</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md transition hover:shadow-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Mitos sobre la Alimentación Saludable</h3>
                <p class="text-gray-700 mb-4">Desmentimos algunos de los mitos más comunes sobre la nutrición.</p>
                <a href="{{ route('consejos') }}" class="text-yellow-700 hover:text-yellow-500 font-semibold">Leer Más</a>
            </div>
        </div>
    </section>

    <!-- Sección de Juego y Desafío -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
        <!-- Juego de Verdadero o Falso -->
        <div class="bg-green-100 p-6 rounded-2xl shadow-md text-center">
            <h2 class="text-2xl font-bold text-green-700 mb-4">🎯 ¿Verdadero o Falso?</h2>
            <p id="pregunta" class="text-lg font-semibold mb-6">Cargando pregunta...</p>
            <div class="flex justify-center gap-4 mb-4">
                <button onclick="verificarRespuesta('verdadero')" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 transition">Verdadero</button>
                <button onclick="verificarRespuesta('falso')" class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition">Falso</button>
            </div>
            <div id="respuesta" class="mt-4 text-base text-gray-800 font-medium"></div>
            <button id="botonSiguiente" onclick="siguientePregunta()" class="mt-6 bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 hidden transition">
                👉 Siguiente pregunta
            </button>
            <div id="final" class="mt-6 hidden">
                <p id="mensajeFinal" class="text-lg font-semibold text-purple-700 my-4"></p>
                <button onclick="reiniciarJuego()" class="bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700 transition">🔄 Jugar otra vez</button>
            </div>
        </div>

        <!-- Desafío Saludable de la Semana -->
        <div class="bg-yellow-100 p-6 rounded-2xl shadow-md text-center">
            <h2 class="text-2xl font-bold text-yellow-700 mb-4">🍎 Desafío Saludable de la Semana</h2>
            <p class="text-lg mb-6">Esta semana… ¡come frutas todos los días!</p>
            <button onclick="aceptarDesafio()" class="bg-green-500 text-white px-6 py-3 rounded-full hover:bg-green-600 transition">
                ¡Acepto el desafío!
            </button>
            <div id="mensajeDesafio" class="mt-6 text-green-700 font-semibold"></div>
            <div id="diasCompletados" class="mt-6 text-lg"></div>
            <div id="estrellas" class="mt-4 text-yellow-500 text-2xl">
                <span id="stars"></span> <!-- Estrellas ganadas -->
            </div>
        </div>
    </section>

    <!-- Test Interactivo de Conciencia Alimenticia -->
    <section id="testConciencia" class="bg-white p-8 rounded-lg shadow-lg text-center">
        <h2 class="text-3xl font-bold text-green-700 mb-4">¿Cómo está tu conciencia alimenticia?</h2>
        <p class="text-gray-600 mb-6">¡Responde estas preguntas y descubre si estás cuidando tu salud correctamente!</p>

        <form id="testForm" class="space-y-6">
            <!-- Pregunta 1 -->
            <div class="mb-4">
                <label class="block text-lg font-medium text-gray-800">¿Comes verduras todos los días?</label>
                <div class="flex justify-center space-x-4 mt-4">
                    <button type="button" class="btn-answer bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-full transition duration-300" onclick="recordAnswer('verduras', 'yes')">Sí</button>
                    <button type="button" class="btn-answer bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full transition duration-300" onclick="recordAnswer('verduras', 'no')">No</button>
                </div>
            </div>

            <!-- Pregunta 2 -->
            <div class="mb-4">
                <label class="block text-lg font-medium text-gray-800">¿Tomas gaseosa más de 3 veces por semana?</label>
                <div class="flex justify-center space-x-4 mt-4">
                    <button type="button" class="btn-answer bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-full transition duration-300" onclick="recordAnswer('gaseosa', 'yes')">Sí</button>
                    <button type="button" class="btn-answer bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full transition duration-300" onclick="recordAnswer('gaseosa', 'no')">No</button>
                </div>
            </div>

            <!-- Pregunta 3 -->
            <div class="mb-4">
                <label class="block text-lg font-medium text-gray-800">¿Desayunas cada mañana?</label>
                <div class="flex justify-center space-x-4 mt-4">
                    <button type="button" class="btn-answer bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-full transition duration-300" onclick="recordAnswer('desayuno', 'yes')">Sí</button>
                    <button type="button" class="btn-answer bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full transition duration-300" onclick="recordAnswer('desayuno', 'no')">No</button>
                </div>
            </div>

            <!-- Botón de envío -->
            <div class="text-center mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-8 py-3 rounded-full transition duration-300">Ver Resultado</button>
            </div>
        </form>

        <!-- Resultado -->
        <div id="testResult" class="mt-6 text-xl font-semibold text-green-700"></div>
    </section>

   <!-- Comentarios -->
<div class="bg-blue-100 p-8 rounded-2xl shadow-lg mt-10">
    <div class="comment-section">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Comentarios</h3>

        <!-- Formulario para agregar comentarios -->
        <form action="{{ route('comments.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-800">Nombre (opcional)</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Tu nombre">
            </div>
            <div class="mb-4">
                <label for="comment" class="block text-lg font-medium text-gray-800">Comentario</label>
                <textarea id="comment" name="comment" class="w-full p-3 border border-gray-300 rounded-md" rows="4" placeholder="Escribe tu comentario aquí..." required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-full transition duration-300">Enviar Comentario</button>
        </form>

        <!-- Lista de comentarios -->
        @if ($comments->isEmpty())
            <p class="text-gray-600 italic">Aún no hay comentarios. ¡Sé el primero en dejar uno!</p>
        @else
            <div class="space-y-4">
                @foreach ($comments as $comment)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <p class="text-gray-800 font-semibold">{{ $comment->name ?? 'Anónimo' }}</p>
                        <p class="text-gray-600">{{ $comment->comment }}</p>
                        <small class="text-gray-500">{{ $comment->created_at->diffForHumans() }}</small>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
</main>
@endsection

@section('scripts')
<script>
    let answers = {
        verduras: '',
        gaseosa: '',
        desayuno: ''
    };

    function recordAnswer(question, answer) {
        answers[question] = answer;
    }

    document.getElementById('testForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Validar que todas las preguntas tengan respuesta
        if (!answers.verduras || !answers.gaseosa || !answers.desayuno) {
            alert('Por favor, responde todas las preguntas.');
            return;
        }

        // Calcular el puntaje
        let score = 0;
        if (answers.verduras === 'yes') score++;
        if (answers.gaseosa === 'no') score++;
        if (answers.desayuno === 'yes') score++;

        // Mostrar el resultado
        let resultMessage = '';
        if (score === 3) {
            resultMessage = "¡Excelente! Estás cuidando tu salud alimentaria.";
        } else if (score === 2) {
            resultMessage = "¡Bien! Pero aún puedes mejorar algunos hábitos.";
        } else {
            resultMessage = "¡Cuidado! Tu salud está en riesgo, es hora de hacer cambios.";
        }

        document.getElementById('testResult').textContent = resultMessage;
    });
</script>

<script src="{{ asset('/js/juegofv.js') }}"></script>
<script src="{{ asset('/js/reto.js') }}"></script>
@endsection




