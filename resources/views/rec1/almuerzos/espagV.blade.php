@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', 'Lasaña de Espinacas y Queso Cheddar 🥬🧀 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/lasanaEspinacas.png') }}" alt="Lasaña de Espinacas" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Lasaña de Espinacas y Queso Cheddar</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Si te apetece una receta original en la que las espinacas sean las protagonistas, no te pierdas esta lasaña de espinacas. ¡Está riquísima!”
                </p>
            </div>
        </div>

        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">Equipo Sweet Home</p>
            </div>
            <br>
        </div>
    </div>
    <br>
    <div class="row justify-content-center cud">
        <!-- Ingredientes y pasos -->
        <div class="col-8">
            <div class="d-flex justify-content-between mb-3 bg-gray-200 p-2 rounded">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 7
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 30'
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
                        <img src="{{ asset('imgIngredient/queso_cheddar.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Queso cheddar <span id="quesocheddar">25 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/cebolla.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Cebolla <span id="cebolla">25 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/queso_rallado.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Queso rallado <span id="quesorallado">3/4 puñado</span>
                    </li>
                </ul>
                <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_oliva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite de oliva <span id="aceiteoliva">1/2 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/salsa_bechamel.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Salsa bechamel <span id="salsabechamel">1/4 bote pequeño</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/lámina_de_lasaña.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Lámina de lasaña <span id="laminalasaña">1 1/2 unidades</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Precalienta el horno a 200ºC.
                    </li>
                    <li data-number="2">
                        Tritura el queso cheddar con ayuda de una picadora. Reserva.
                    </li>
                    <li data-number="3">
                        Corta muy finamente la cebolla.
                    </li>
                    <li data-number="4">
                        Echa aceite en una sartén y sofríe la cebolla a fuego medio unos 5 minutos, hasta que ablande y se dore.
                    </li>
                    <li data-number="5">
                        Incorpora las espinacas. Poco a poco con el calor irán rebajando su tamaño. Saltéalas unos 5 minutos.
                    </li>
                    <li data-number="6">
                        Vierte las espinacas y la cebolla en un recipiente y añade el queso cheddar. Añade un par de cucharadas de salsa bechamel y mezcla hasta que se integren muy bien los ingredientes.
                    </li>
                    <li data-number="7">
                        Coloca una capa de salsa bechamel sobre un recipiente apto para horno. Coloca un par de láminas de lasaña encima. Rellena con la mitad de la mezcla de espinacas y queso. Coloca de nuevo dos láminas de lasaña. Extiende un poco de salsa bechamel por encima y el resto de espinacas. Tapa con dos láminas de lasaña.
                    </li>
                    <li data-number="8">
                        Esparce por encima el resto de salsa bechamel, añade un poco de queso rallado por encima y mete en el horno. Cocina alrededor de 15-20 minutos en el horno. El tiempo dependerá de lo que indique las instrucciones del fabricante de la pasta.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Si quieres, puedes reemplazar la espinaca por ligeras tajadas de pepino.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection