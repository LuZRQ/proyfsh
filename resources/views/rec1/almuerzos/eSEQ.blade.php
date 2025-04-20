@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', ' Espaguetis con Espinacas y Queso 🍝🧀 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/espaguetis-con-salsa-de-espinacas.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Espaguetis con Salsa de Espinacas y Quesos</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Si tienes antojo de pasta, algunas espinacas por tu nevera y un poco de queso, te traemos ¡la receta perfecta! Unos espaguetis súper jugosos y cremosos en salsa de espinacas y quesos. Facilísimos de preparar.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Equipo Sweet Home
                </p>
            </div>
            <br>
        </div>
    </div>
    <br>
    <div class="row justify-content-center cud">
        <!-- Ingredientes y pasos -->
        <div class="col-8">
            <div class="d-flex justify-content-between mb-3 p-2 rounded caj">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 9
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 20'
                </span>
            </div>
            <br>
            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-outline-secondary me-3" id="decrease">-</button>
                <span id="portionCount" class="mx-2">1</span> Porciones
                <button class="ms-3 btn btn-outline-secondary" id="increase">+</button>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes frescos</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/espinaca.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Espinaca <span id="espinaca">75 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/cebolla.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Cebolla <span id="cebolla">1/4 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/ajo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Ajo <span id="ajo">1/2 diente</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/queso_de_untar.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Queso De Untar <span id="quesoUntar">1/2 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/queso_rallado.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Queso Rallado <span id="quesoRallado">1/2 puñado</span>
                    </li>
                </ul>
                <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/espagueti.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Espagueti <span id="espagueti">80 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/leche_evaporada.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Leche Evaporada <span id="lecheEvaporada">60 mililitros</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_oliva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite De Oliva <span id="aceiteOliva">1/2 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/sal.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Sal <span id="sal">1/2 pizca</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Cuece la pasta en agua hirviendo el tiempo que indique su envoltorio. Una vez esté lista, resérvala.
                    </li>
                    <li data-number="2">
                        Pica finamente el ajo y corta en tiras finas la cebolla.
                    </li>
                    <li data-number="3">
                        Echa un poco de aceite de oliva en una sartén y sofríe el ajo y la cebolla picada a fuego medio, cuidando de que no se quemen los ajos.
                    </li>
                    <li data-number="4">
                        Añade las espinacas lavadas y cortadas. Con el calor, verás que poco a poco irá reduciendo el volumen de éstas. Añade una pizca de sal.
                    </li>
                    <li data-number="5">
                        Pasados 2-3 minutos agrega la leche evaporada y el queso de untar. Cocina a fuego medio hasta que se derrita el queso, revolviendo de vez en cuando.
                    </li>
                    <li data-number="6">
                        Añade un puñado generoso de queso rallado y continúa al fuego hasta que el queso se derrita. Comprueba el punto de sal y, en su caso, rectifica.
                    </li>
                    <li data-number="7">
                        Vierte la pasta en la salsa y con ayuda de una cuchara de madera mezcla. ¡Ya puedes servirla!
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes sustituir la leche evaporada por nata líquida.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection