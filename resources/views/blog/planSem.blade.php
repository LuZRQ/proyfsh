@extends('layouts.app3')
@section('title','Blog')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style05.css') }}" />
@endsection
@section('back_url', route('blog'))
@section('header_title', ' Inspira y conecta ✍️🌍')

@section('content')
<main class="container mx-auto py-10 px-6">
    <!-- Cabecera del blog -->
    <header class="text-center mb-10">
        <h1 class="text-5xl font-bold text-green-700 mb-4">Cómo Crear un Plan de Comidas Semanal</h1>
        <p class="text-gray-600 text-lg">Aprende a planificar tus comidas de manera eficiente para llevar una alimentación balanceada.</p>
    </header>

    <!-- Estructura de columna + post -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Nueva sección con imagen y texto -->
        <aside class="md:col-span-1 bg-green-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Consejos para un Buen Plan de Comidas</h2>
            <div class="mb-4">
                <img src="{{ asset('img/plan1.png') }}" alt="Planificación de comidas" class="w-full h-64 object-cover rounded-lg shadow-md" />
            </div>
            <p class="text-gray-700 mb-4"><strong>1. Define tus objetivos:</strong> Antes de planificar, decide qué quieres lograr con tus comidas. Ya sea perder peso, mejorar tu salud o ahorrar tiempo, tener una meta clara te ayudará a mantener el rumbo.</p>
            <p class="text-gray-700 mb-4"><strong>2. Organiza tu despensa:</strong> Mantén un inventario de los alimentos que tienes en casa. Esto te ayudará a evitar compras innecesarias y a optimizar lo que ya tienes.</p>
            <p class="text-gray-700 mb-4"><strong>3. Cocina por adelantado:</strong> Dedicar un par de horas durante el fin de semana a preparar tus comidas de la semana te ahorrará tiempo y estrés los días de mayor actividad.</p>
            <p class="text-gray-700"><strong>4. Varía las recetas:</strong> Asegúrate de tener variedad en tu plan de comidas para evitar aburrirte. Incluir diferentes grupos de alimentos te ayudará a cubrir tus necesidades nutricionales.</p>
        </aside>

        <!-- Entrada principal del blog -->
        <article class="md:col-span-2 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-green-800 mb-4">Planifica Tus Comidas de Manera Eficiente</h2>
            <p class="text-gray-700 text-lg mb-8">
                La planificación de comidas no solo es una excelente manera de ahorrar tiempo, sino también una forma efectiva de mantener una dieta balanceada y saludable. Te permite tomar decisiones conscientes y evitar elecciones impulsivas que a menudo no son las más saludables.
            </p>

            <!-- Imagen relacionada -->
            <div class="mb-6">
                <img src="{{ asset('img/plan2.png') }}" class="w-full h-64 object-cover rounded-lg shadow-md" alt="Plan de comidas semanal" />
            </div>

            <!-- Consejos enumerados -->
            <ul class="list-disc pl-6 space-y-4 text-gray-700">
                <li><strong>Organiza tu semana:</strong> Al iniciar la semana, dedica un tiempo a escribir un plan de comidas que incluya desayunos, almuerzos y cenas. Tener un esquema claro te ayudará a ahorrar tiempo.</li>
                <li><strong>Usa ingredientes frescos:</strong> Aprovecha productos frescos y de temporada. Son más nutritivos y muchas veces más económicos.</li>
                <li><strong>Prepara porciones grandes:</strong> Al cocinar cantidades más grandes, puedes almacenar porciones adicionales para otras comidas durante la semana.</li>
                <li><strong>Considera tus snacks:</strong> Planificar entre comidas es igual de importante. Ten a mano opciones saludables como frutas, nueces o yogur natural.</li>
            </ul>

            <!-- Texto adicional para enriquecer el contenido -->
            <div class="mt-6">
                <h3 class="text-2xl font-semibold text-green-800 mb-2">El impacto de la planificación en tu salud</h3>
                <p class="text-gray-700 mb-4">
                    Adoptar la planificación de comidas como un hábito te ayudará no solo a comer de manera más consciente, sino que también reducirá el desperdicio de alimentos y te permitirá mantener una dieta equilibrada a largo plazo.
                </p>
                <p class="text-gray-700 mb-4">
                    Al tomarte el tiempo de planificar, también tienes la oportunidad de explorar nuevas recetas, mejorar tus habilidades culinarias y asegurarte de que cada comida sea nutritiva y deliciosa.
                </p>
            </div>

            <!-- Resumen con mucha información -->
            <div class="text-center mt-10">
                <h4 class="text-lg font-semibold text-gray-800">Resumen</h4>
                <p class="text-gray-600 mb-4">
                    La planificación de comidas es clave para mantener una dieta saludable y equilibrada. Ayuda a evitar decisiones impulsivas y promueve el consumo de alimentos frescos y nutritivos. La organización semanal de tus comidas te permitirá aprovechar mejor tu tiempo y recursos, mientras te aseguras de que estás cubriendo todas tus necesidades nutricionales.
                </p>
                <p class="text-gray-600 mb-4">
                    Ya sea que quieras perder peso, ahorrar dinero o simplemente comer más saludable, un buen plan de comidas es la solución. ¡Empieza hoy a planificar tus comidas y verás los resultados a corto y largo plazo!
                </p>
                <p class="text-gray-600">
                    ¡Atrévete a planificar y transforma tu alimentación!
                </p>
            </div>
        </article>

        <!-- Enlaces a otros blogs -->
        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Blogs</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('blog.diSu') }}" class="text-blue-600 hover:underline">Blog 1: Beneficios de una Dieta Sin Azúcar</a></li>
                <li><a href="{{ route('blog.smothies') }}" class="text-blue-600 hover:underline">Blog 2: Los Mejores Smoothies para Desayunar</a></li>
                <li><a href="{{ route('blog.recuEner') }}" class="text-blue-600 hover:underline">Blog 3: Alimentos para Aumentar tu Energía</a></li>
                <li><a href="{{ route('blog.beCoVe') }}" class="text-blue-600 hover:underline">Blog 4: 5 Beneficios de Comer Más Vegetales</a></li>
                <li><a href="{{ route('blog.superAlimen') }}" class="text-blue-600 hover:underline">Blog 5: Superalimentos: Qué Son y Cómo Incluirlos en tu Dieta</a></li>
            </ul>
        </aside>
    </div>
</main>
@endsection