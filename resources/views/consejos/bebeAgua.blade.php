@extends('layouts.app3')
@section('title','Consejos')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style03.css') }}" />
@endsection
@section('back_url', route('consejos'))
@section('header_title', '💧¡Bebe Suficiente Agua! 💧🚰')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sección del Consejo -->
        <article class="md:col-span-3 bg-white p-8 rounded-lg shadow-lg">
            <!-- Imagen -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/agua.png') }}" alt="Bebe Suficiente Agua" class="rounded-lg shadow-lg w-full h-full object-cover">
            </div>
            <br>
            <!-- Texto del consejo expandido -->
            <div>
                <h3 class="text-2xl font-bold mb-4 text-blue-900">Beneficios de Beber Suficiente Agua</h3>
                <p class="text-gray-700 mb-4">
                    El agua es esencial para la vida. Mantener una adecuada hidratación es crucial para el funcionamiento óptimo de tu cuerpo y mente. A continuación, se detallan los beneficios clave de beber suficiente agua diariamente.
                </p>

                <!-- Estructura con más secciones -->
                <section>
                    <h4 class="text-xl font-semibold mb-2 text-blue-500">1. Hidratación y rendimiento físico</h4>
                    <p class="text-gray-700 mb-4">
                        El rendimiento físico puede disminuir significativamente si no estás bien hidratado. La deshidratación afecta tu fuerza, resistencia y coordinación. Beber agua antes, durante y después del ejercicio es clave para mantener un rendimiento óptimo.
                    </p>
                </section>

                <section>
                    <h4 class="text-xl font-semibold mb-2 text-blue-500">2. Salud Mental y Concentración</h4>
                    <p class="text-gray-700 mb-4">
                        La deshidratación también afecta el cerebro. Incluso niveles leves de deshidratación pueden disminuir tu concentración, afectar tu estado de ánimo y aumentar los dolores de cabeza. Beber suficiente agua asegura que tu cerebro esté bien nutrido y funcionando correctamente.
                    </p>
                </section>

                <section>
                    <h4 class="text-xl font-semibold mb-2 text-blue-500">3. Piel Saludable y Digestión</h4>
                    <p class="text-gray-700 mb-4">
                        La piel deshidratada puede volverse seca y menos elástica. Beber agua ayuda a mantener la piel hidratada desde el interior, dándole un aspecto más saludable y brillante. Además, el agua favorece el proceso digestivo, ayudando a prevenir el estreñimiento y a mantener el sistema digestivo funcionando bien.
                    </p>
                </section>

                <section>
                    <h4 class="text-xl font-semibold mb-2 text-blue-500">4. Eliminación de Toxinas</h4>
                    <p class="text-gray-700 mb-4">
                        El agua es fundamental para ayudar a los riñones a filtrar y eliminar las toxinas del cuerpo. Cuando no bebes suficiente agua, los riñones tienen que trabajar más, lo que puede llevar a la acumulación de toxinas.
                    </p>
                </section>

                <section>
                    <h4 class="text-xl font-semibold mb-2 text-blue-500">5. Control del Peso</h4>
                    <p class="text-gray-700 mb-4">
                        Beber agua antes de las comidas puede ayudar a controlar el apetito, ya que produce una sensación de saciedad. Esto puede ser beneficioso para aquellas personas que buscan controlar o reducir su peso.
                    </p>
                </section>

                <section>
                    <h4 class="text-xl font-semibold mb-2 text-blue-500">6. Regulación de la Temperatura Corporal</h4>
                    <p class="text-gray-700 mb-4">
                        El agua es clave para la regulación de la temperatura corporal. A través del sudor, el cuerpo disipa el calor. Mantenerte hidratado permite que tu cuerpo se enfríe de manera efectiva, especialmente durante actividades físicas o en climas cálidos.
                    </p>
                </section>

                <!-- Añadir más detalles -->
                <details class="mt-3">
                    <summary class="cursor-pointer text-blue-500 hover:text-blue-800 font-semibold">Leer Más sobre los beneficios de la hidratación</summary>
                    <div class="mt-2 text-gray-700">
                        Además de los beneficios mencionados, una hidratación adecuada puede prevenir la fatiga crónica, mejorar la calidad del sueño y favorecer la desintoxicación natural del cuerpo. El agua también juega un papel clave en la producción de saliva y mucosidad, que ayudan a mantener la salud de la boca, nariz y ojos.
                        
                        Beber suficiente agua durante el día no solo previene la deshidratación, sino que también apoya los procesos vitales del cuerpo. Recuerda que una dieta rica en frutas y verduras también puede contribuir a la ingesta de agua. ¡Haz que la hidratación sea parte de tu rutina diaria para mantener una salud óptima!
                    </div>
                </details>
            </div>
        </article>

        <!-- Sidebar con otros consejos -->
        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Consejos</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('consejos.comeVerduras') }}" class="text-blue-600 hover:underline">Consejo 1: Come Más Frutas y Verduras</a></li>
                <li><a href="{{ route('consejos.ejercicio') }}" class="text-blue-600 hover:underline">Consejo 2: Incluye Ejercicio Regular</a></li>
                <li><a href="{{ route('consejos.comidaCasera') }}" class="text-blue-600 hover:underline">Consejo 3: Elige Comidas Caseras</a></li>
                <li><a href="{{ route('consejos.productosNaturales') }}" class="text-blue-600 hover:underline">Consejo 4: Opta por Ingredientes Naturales</a></li>
                <li><a href="{{ route('consejos.dietaVariada') }}" class="text-blue-600 hover:underline">Consejo 5: Varía tu Dieta</a></li>
            </ul>
        </aside>
    </div>
@endsection