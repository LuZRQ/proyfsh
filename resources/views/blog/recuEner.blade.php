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
        <h1 class="text-5xl font-bold text-green-700 mb-4">Alimentos para Aumentar tu Energía</h1>
        <p class="text-gray-600 text-lg">Conoce los mejores alimentos para mantener tu energía durante todo el día.</p>
    </header>

    <!-- Contenido principal con sección lateral y artículo -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Columna lateral (consejos rápidos) -->
        <aside class="md:col-span-1 bg-green-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Consejos para Mantener tu Energía</h2>
            <div class="mb-4">
                <img src="{{ asset('img/ener1.png') }}" alt="Alimentos energéticos" class="w-full h-64 object-cover rounded-lg shadow-md" />
            </div>
            <p class="text-gray-700 mb-4"><strong>1. Hidrátate:</strong> La deshidratación puede causar fatiga. Bebe suficiente agua a lo largo del día para mantenerte alerta.</p>
            <p class="text-gray-700 mb-4"><strong>2. Come más a menudo:</strong> Opta por varias comidas pequeñas durante el día en lugar de grandes porciones. Mantendrá tu nivel de azúcar en sangre más estable.</p>
            <p class="text-gray-700 mb-4"><strong>3. Equilibra proteínas y carbohidratos:</strong> Elige alimentos que combinen proteínas magras con carbohidratos complejos para proporcionar energía sostenida.</p>
            <p class="text-gray-700"><strong>4. Evita los picos de azúcar:</strong> Aunque los alimentos con azúcar pueden proporcionar un impulso rápido de energía, este suele ser seguido por un bajón de energía.</p>
        </aside>

        <!-- Artículo principal del blog -->
        <article class="md:col-span-2 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-green-800 mb-4">Los Mejores Alimentos para Mantenerte con Energía Todo el Día</h2>
            <p class="text-gray-700 text-lg mb-8">
                Mantener altos niveles de energía durante el día no solo depende de una buena noche de descanso, sino también de elegir los alimentos adecuados. Algunos alimentos proporcionan energía rápida, mientras que otros ayudan a mantenerla de manera más constante y prolongada. Aquí te compartimos una lista de los mejores alimentos para que te mantengas activo y alerta durante toda la jornada.
            </p>

            <!-- Imagen relacionada -->
            <div class="mb-6">
                <img src="{{ asset('img/ener2.png') }}" class="w-full h-64 object-cover rounded-lg shadow-md" alt="Alimentos que aumentan la energía" />
            </div>

            <!-- Sección de alimentos energéticos -->
            <h3 class="text-3xl font-semibold text-green-800 mb-4">Frutas y Verduras</h3>
            <ul class="list-disc pl-6 space-y-4 text-gray-700">
                <li><strong>Plátanos:</strong> Ricos en carbohidratos, potasio y vitamina B6, los plátanos son una excelente fuente de energía prolongada. Perfectos para un snack antes del ejercicio o para comenzar el día.</li>
                <li><strong>Espinacas:</strong> Llenas de hierro, las espinacas ayudan a combatir la fatiga. El hierro es fundamental para la producción de hemoglobina, que transporta oxígeno a través del cuerpo, manteniéndonos despiertos y alertas.</li>
                <li><strong>Naranjas:</strong> Llenas de vitamina C, las naranjas también contienen antioxidantes que ayudan a reducir la fatiga y mejorar el rendimiento mental.</li>
                <li><strong>Aguacate:</strong> Una excelente fuente de grasas saludables, el aguacate es perfecto para proporcionar energía y saciedad durante largos periodos de tiempo.</li>
            </ul>

            <!-- Sección de proteínas -->
            <h3 class="text-3xl font-semibold text-green-800 mt-8 mb-4">Proteínas Magras</h3>
            <ul class="list-disc pl-6 space-y-4 text-gray-700">
                <li><strong>Huevos:</strong> Son una fuente completa de proteínas y contienen nutrientes como colina y vitamina B que son esenciales para mantener la energía mental y física.</li>
                <li><strong>Pechuga de Pollo:</strong> Las proteínas magras como el pollo ayudan a mantener el nivel de energía estable, ya que tardan más en digerirse, lo que proporciona energía de larga duración.</li>
                <li><strong>Salmón:</strong> Rico en ácidos grasos omega-3, el salmón ayuda a mantener la salud cerebral y reduce el cansancio mental.</li>
            </ul>

            <!-- Sección de carbohidratos complejos -->
            <h3 class="text-3xl font-semibold text-green-800 mt-8 mb-4">Carbohidratos Complejos</h3>
            <ul class="list-disc pl-6 space-y-4 text-gray-700">
                <li><strong>Avena:</strong> Una opción perfecta para el desayuno, la avena proporciona una liberación lenta de energía gracias a su contenido en fibra, evitando picos de azúcar en sangre.</li>
                <li><strong>Quinoa:</strong> Rica en proteínas, fibra y carbohidratos complejos, la quinoa es ideal para proporcionar energía sostenida. Además, es fácil de digerir y versátil en la cocina.</li>
                <li><strong>Batata:</strong> Contiene carbohidratos complejos y fibra, lo que la convierte en una fuente de energía duradera que además ayuda a mantener la sensación de saciedad.</li>
            </ul>

            <!-- Beneficios de la combinación de alimentos -->
            <h3 class="text-3xl font-semibold text-green-800 mt-8 mb-4">La Clave está en la Combinación</h3>
            <p class="text-gray-700 text-lg mb-4">
                Para maximizar tus niveles de energía durante todo el día, no solo se trata de consumir alimentos ricos en carbohidratos, proteínas o grasas saludables, sino de combinar estos nutrientes estratégicamente. Los alimentos ricos en carbohidratos proporcionan energía rápida, mientras que las proteínas y las grasas saludables ayudan a mantener los niveles de energía de forma sostenida.
            </p>
            <p class="text-gray-700 text-lg mb-4">
                Incorpora frutas, verduras, proteínas magras y carbohidratos complejos en cada comida, y notarás cómo tus niveles de energía se mantienen constantes a lo largo del día. No olvides mantenerte hidratado, ya que el agua también juega un papel fundamental en la producción de energía.
            </p>

            <!-- Resumen final -->
            <div class="text-center mt-10">
                <h4 class="text-lg font-semibold text-gray-800">Resumen</h4>
                <p class="text-gray-600 mb-4">
                    Elegir alimentos energéticos y combinarlos adecuadamente es clave para mantenerte activo y enfocado durante todo el día. Desde frutas y verduras hasta proteínas magras y carbohidratos complejos, tu alimentación puede ser tu mejor aliada para evitar la fatiga.
                </p>
                <p class="text-gray-600 mb-4">
                    Recuerda equilibrar tus comidas y mantenerte hidratado para disfrutar de una energía sostenida sin los molestos bajones.
                </p>
                <p class="text-gray-600">
                    ¡Sigue estos consejos y lleva tu energía al máximo cada día!
                </p>
            </div>
        </article>

        <!-- Enlaces a otros blogs -->
        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Blogs</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('blog.diSu') }}" class="text-blue-600 hover:underline">Blog 1: Beneficios de una Dieta Sin Azúcar</a></li>
                <li><a href="{{ route('blog.smothies') }}" class="text-blue-600 hover:underline">Blog 2: Los Mejores Smoothies para Desayunar</a></li>
                <li><a href="{{ route('blog.planSem') }}" class="text-blue-600 hover:underline">Blog 3: Cómo Crear un Plan de Comidas Semanal</a></li>
                <li><a href="{{ route('blog.beCoVe') }}" class="text-blue-600 hover:underline">Blog 4: 5 Beneficios de Comer Más Vegetales</a></li>
                <li><a href="{{ route('blog.superAlimen') }}" class="text-blue-600 hover:underline">Blog 5: Superalimentos: Qué Son y Cómo Incluirlos en tu Dieta</a></li>
            </ul>
        </aside>
    </div>
</main>
@endsection