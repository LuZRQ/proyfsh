@extends('layouts.app3')
@section('title','Consejos')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style03.css') }}" />
@endsection
@section('back_url', route('consejos'))
@section('header_title', 'Descubre la frescura de frutas y verduras 🥗🍎')

@section('content')
<h2 class="text-3xl font-semibold text-center mb-6" style="color: rgba(18, 90, 28, 0.527);">
        Beneficios de Comer Más Frutas y Verduras
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sección del Consejo -->
        <article class="md:col-span-3 bg-white p-8 rounded-lg shadow-lg">
            <!-- Imagen del Consejo -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/frutas-y-verduras.jpg') }}" alt="Frutas y Verduras" class="rounded-lg shadow-lg w-full h-full object-cover transition-transform transform hover:scale-105">
            </div>
            <br>
            <!-- Texto del Consejo -->
            <div>
                <h3 class="text-2xl font-bold mb-4 text-green-600">¿Por qué es importante comer más frutas y verduras?</h3>
                <p class="text-gray-700 mb-4">
                    Las frutas y verduras son una fuente rica de <strong>vitaminas</strong>, <strong>minerales</strong>, <strong>antioxidantes</strong> y <strong>fibra</strong>. Incorporarlas en tu dieta diaria no solo mejora tu salud general, sino que también ayuda a prevenir enfermedades crónicas como la diabetes y enfermedades del corazón, y contribuye a un sistema digestivo saludable.
                </p>
                <p class="text-gray-700 mb-4">
                    Estos alimentos aportan bajos niveles de grasa, azúcares y sodio, lo que los convierte en una excelente opción para mantener un <strong>peso saludable</strong> y promover una <strong>alimentación balanceada</strong>.
                </p>
                <p class="text-gray-700 mb-4">
                    Comer una variedad de frutas y verduras también contribuye a una piel más saludable, mejora la función cerebral y puede ayudarte a mantener altos niveles de energía.
                </p>
                <p class="text-gray-700 mb-4">
                    Otros beneficios incluyen:
                    <ul class="list-disc list-inside text-gray-700 mt-2">
                        <li><strong>Mejor digestión:</strong> La fibra ayuda a regular el sistema digestivo y a prevenir el estreñimiento.</li>
                        <li><strong>Salud cardiovascular:</strong> Los antioxidantes, como los flavonoides y el ácido ascórbico, pueden ayudar a reducir la inflamación y proteger el corazón.</li>
                        <li><strong>Control de peso:</strong> Son bajas en calorías y muy saciantes, lo que facilita el control del peso.</li>
                        <li><strong>Prevención de enfermedades:</strong> Una dieta rica en frutas y verduras puede reducir el riesgo de varios tipos de cáncer y enfermedades crónicas.</li>
                        <li><strong>Mejora del sistema inmunológico:</strong> Las vitaminas y minerales en estas frutas y verduras pueden fortalecer el sistema inmunológico, ayudando a combatir infecciones.</li>
                        <li><strong>Beneficios para la piel:</strong> La alta concentración de antioxidantes ayuda a combatir el envejecimiento prematuro y mejora la salud de la piel.</li>
                        <li><strong>Salud mental:</strong> Se ha demostrado que una dieta rica en frutas y verduras está asociada con una mejor salud mental y un menor riesgo de depresión.</li>
                    </ul>
                </p>
                <details class="mt-3">
                    <summary class="cursor-pointer text-green-800 hover:text-green-300 font-semibold">Leer Más sobre los beneficios</summary>
                    <div class="mt-2 text-gray-700">
                        Comer frutas y verduras no solo es esencial para mantener una dieta equilibrada, sino que también ofrece una amplia gama de beneficios para la salud que son fundamentales para el bienestar general.
                        La ingesta regular de estos alimentos está asociada con un menor riesgo de enfermedades crónicas como la obesidad, diabetes tipo 2 y enfermedades cardiovasculares.
                        Además, gracias a su contenido de antioxidantes, estas frutas y verduras ayudan a combatir el estrés oxidativo en el cuerpo, lo que puede contribuir a la prevención del cáncer y el envejecimiento prematuro.
                        <br>
                        Un aspecto importante es la fibra, que favorece la salud digestiva. Consumir suficiente fibra puede ayudar a regular el tránsito intestinal, prevenir el estreñimiento y mantener la salud del microbioma intestinal, lo que a su vez puede tener un impacto positivo en la salud mental.
                        <br>
                        También se ha demostrado que una dieta rica en frutas y verduras mejora la salud mental. Por ejemplo, los estudios indican que una mayor ingesta de estos alimentos está relacionada con un mejor estado de ánimo y un menor riesgo de depresión y ansiedad.
                        <br>
                        Finalmente, no hay que olvidar que el consumo de una variedad de frutas y verduras no solo aporta beneficios para la salud, sino que también enriquece nuestra alimentación. Probar diferentes colores y tipos no solo es un festín para los ojos, sino que también asegura que nuestro cuerpo obtenga un espectro completo de nutrientes esenciales, vitaminas y minerales.
                        <br>
                        ¡Incorpora más frutas y verduras en tu dieta y observa cómo tu salud mejora!
                    </div>
                </details>
            </div>
        </article>

        <!-- Nueva sección para enlaces a otros consejos -->
        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Consejos</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('consejos.bebeAgua') }}" class="text-blue-600 hover:underline">Consejo 1: Bebe Suficiente Agua</a></li>
                <li><a href="{{ route('consejos.ejercicio') }}" class="text-blue-600 hover:underline">Consejo 2: Incluye Ejercicio Regular</a></li>
                <li><a href="{{ route('consejos.comidaCasera') }}" class="text-blue-600 hover:underline">Consejo 3: Elige Comidas Caseras</a></li>
                <li><a href="{{ route('consejos.productosNaturales') }}" class="text-blue-600 hover:underline">Consejo 4: Opta por Ingredientes Naturales</a></li>
                <li><a href="{{ route('consejos.dietaVariada') }}" class="text-blue-600 hover:underline">Consejo 5: Varía tu Dieta</a></li>
            </ul>
        </aside>
    </div>

    <br>
    <!-- Consejos Prácticos -->
    <section class="mb-12">
        <h3 class="text-2xl font-bold mb-6 text-center">Consejos Prácticos para Comer Más Frutas y Verduras</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Consejo 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold mb-4">Hazlo divertido</h4>
                <p class="text-gray-700 mb-4">Prepara batidos de frutas o ensaladas coloridas para hacer que comer frutas y verduras sea una experiencia más placentera y atractiva.</p>
            </div>
            <!-- Consejo 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold mb-4">Prepara meriendas saludables</h4>
                <p class="text-gray-700 mb-4">Mantén frutas frescas o verduras crujientes como zanahorias a la mano para meriendas rápidas y saludables.</p>
            </div>
            <!-- Consejo 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold mb-4">Agrega verduras a tus platos favoritos</h4>
                <p class="text-gray-700 mb-4">Añade verduras como espinacas o champiñones a tus pastas, tortillas o pizzas caseras para aumentar tu ingesta de vegetales sin esfuerzo.</p>
            </div>
        </div>
    </section>
@endsection