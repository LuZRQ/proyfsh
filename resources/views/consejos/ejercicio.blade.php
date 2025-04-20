@extends('layouts.app3')
@section('title','Consejos')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style03.css') }}" />
@endsection
@section('back_url', route('consejos'))
@section('header_title', '¡Haz ejercicio regularmente! 🏃‍♂️✨')

@section('content')
<h2 class="text-4xl font-extrabold text-yellow-700 mb-10 text-center">
        ¡Incorpora Ejercicio Regularmente!
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Ejercicios Cardiovasculares -->
        <section class="bg-white p-6 shadow-md rounded-lg">
            <h3 class="text-2xl font-bold text-yellow-800 mb-4">Ejercicios Cardiovasculares</h3>
            <p class="mb-4 text-gray-600">Estos ejercicios son ideales para mejorar la resistencia, quemar calorías y fortalecer el corazón.</p>
            <ul class="list-disc list-inside space-y-2">
                <li class="text-lg"><span class="font-bold">Correr</span>: Perfecto para mejorar la resistencia y quemar grasa.</li>
                <li class="text-lg"><span class="font-bold">Saltar la cuerda</span>: Un ejercicio divertido y eficiente para tonificar las piernas y mejorar el ritmo cardíaco.</li>
                <li class="text-lg"><span class="font-bold">Bicicleta</span>: Ya sea al aire libre o en el gimnasio, la bicicleta es un excelente ejercicio cardiovascular.</li>
                <li class="text-lg"><span class="font-bold">Natación</span>: Trabaja todo el cuerpo y es ideal para aquellos que desean un ejercicio de bajo impacto.</li>
            </ul>
            <img src="{{ asset('img/ejercardiovasc.jpg') }}" alt="Ejercicio Cardiovascular" style="height: 300px; width: 560px;" class="mt-4 rounded-lg">
        </section>

        <!-- Ejercicios de Fuerza -->
        <section class="bg-white p-6 shadow-md rounded-lg">
            <h3 class="text-2xl font-bold text-yellow-800 mb-4">Ejercicios de Fuerza</h3>
            <p class="mb-4 text-gray-600">Desarrolla músculo, mejora la densidad ósea y fortalece todo tu cuerpo con estos ejercicios.</p>
            <ul class="list-disc list-inside space-y-2">
                <li class="text-lg"><span class="font-bold">Levantamiento de pesas</span>: Ideal para fortalecer los principales grupos musculares.</li>
                <li class="text-lg"><span class="font-bold">Sentadillas</span>: Fortalece las piernas, glúteos y el core.</li>
                <li class="text-lg"><span class="font-bold">Flexiones</span>: Trabaja los músculos del pecho, brazos y hombros.</li>
                <li class="text-lg"><span class="font-bold">Planchas</span>: Un ejercicio sencillo pero potente para fortalecer el core.</li>
            </ul>
            <img src="{{ asset('img/ejerfuerz.png') }}" alt="Ejercicio de Fuerza" style="height: 300px; width: 560px;" class="mt-4 rounded-lg">
        </section>
    </div>

    <!-- Ejercicios de Flexibilidad -->
    <section class="bg-gray-50 p-6 mt-8 shadow-md rounded-lg">
        <h3 class="text-2xl font-bold text-yellow-800 mb-4">Ejercicios de Flexibilidad</h3>
        <p class="mb-4 text-gray-600">Estos ejercicios te ayudarán a mejorar el rango de movimiento y prevenir lesiones.</p>
        <ul class="list-disc list-inside space-y-2">
            <li class="text-lg"><span class="font-bold">Yoga</span>: Mejora la flexibilidad y ayuda a reducir el estrés.</li>
            <li class="text-lg"><span class="font-bold">Estiramientos dinámicos</span>: Ideales para antes de un entrenamiento, preparan los músculos.</li>
            <li class="text-lg"><span class="font-bold">Pilates</span>: Trabaja el core y mejora la flexibilidad de manera suave pero efectiva.</li>
        </ul>
        <img src="{{ asset('img/ejerflex.jpg') }}" alt="Ejercicio de Flexibilidad" class="mt-4 rounded-lg mx-auto m-5" style="height: 300px; width: 560px;">
    </section>

    <br>
    <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Consejos</h2>
        <ul class="list-disc list-inside text-gray-800">
            <li><a href="{{ route('consejos.comeVerduras') }}" class="text-blue-600 hover:underline">Consejo 1: Come Más Frutas y Verduras</a></li>
            <li><a href="{{ route('consejos.dietaVariada') }}" class="text-blue-600 hover:underline">Consejo 2: Varía tu Dieta</a></li>
            <li><a href="{{ route('consejos.bebeAgua') }}" class="text-blue-600 hover:underline">Consejo 3: Bebe Suficiente Agua</a></li>
            <li><a href="{{ route('consejos.productosNaturales') }}" class="text-blue-600 hover:underline">Consejo 4: Opta por Ingredientes Naturales</a></li>
            <li><a href="{{ route('consejos.comidaCasera') }}" class="text-blue-600 hover:underline">Consejo 5: Elige Comidas Caseras</a></li>
        </ul>
    </aside>
    <br>

    <!-- Consejos adicionales -->
    <section class="bg-white p-6 mt-8 shadow-md rounded-lg">
        <h3 class="text-2xl font-bold text-yellow-800 mb-4">Consejos para Hacer Ejercicio Regularmente</h3>
        <p class="text-gray-600 mb-4">
            Mantener una rutina de ejercicios puede parecer desafiante al principio, pero con estos consejos será más fácil:
        </p>
        <ul class="list-disc list-inside space-y-2">
            <li class="text-lg"><span class="font-bold">Empieza despacio</span>: No te exijas demasiado desde el inicio, comienza con metas pequeñas y realistas.</li>
            <li class="text-lg"><span class="font-bold">Hazlo divertido</span>: Encuentra ejercicios que disfrutes para mantener la motivación.</li>
            <li class="text-lg"><span class="font-bold">Varía tu rutina</span>: Cambiar de ejercicios evita el aburrimiento y permite trabajar diferentes músculos.</li>
            <li class="text-lg"><span class="font-bold">Escucha a tu cuerpo</span>: Si te sientes cansado, no dudes en tomar descansos para evitar lesiones.</li>
        </ul>
    </section>
@endsection