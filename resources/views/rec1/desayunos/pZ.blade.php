@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', '🥣 Porridge de Zanahoria 🥕 ')
@section('back_url', route('desayunos'))
@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/PoprridgeZabahoria.png') }}" class="img-fluid rounded mx-auto d-block smo" alt="Porridge de Zanahoria">
            <h2 class="mt-3 t" style="color: #49161f;">Porridge de Zanahoria</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Si quieres disfrutar de un desayuno caliente, saciante y súper sencillo de preparar, ¡no te pierdas este porridge de zanahoria cargado de nutrientes y de sabor!”
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
            <div class="d-flex justify-content-between mb-3 p-2 rounded caj">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 7
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 10'
                </span>
            </div>

            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-outline-secondary me-3" id="decrease">-</button>
                <span id="portionCount" class="mx-2">1</span> Porciones
                <button class="ms-3 btn btn-outline-secondary" id="increase">+</button>
            </div>

            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes frescos</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/zanahoria.jpg') }}" class="me-2" style="width: 40px; height: 40px;" alt="Zanahoria">
                        Zanahoria <span id="zanahoria">1/2 unidad</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/crema_de_cacahuete.jpg') }}" class="me-2" style="width: 40px; height: 40px;" alt="Crema de Cacahuete">
                        Crema De Cacahuete <span id="cremaCacahuete">1/2 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/leche_vegetal.jpg') }}" class="me-2" style="width: 40px; height: 40px;" alt="Leche Vegetal">
                        Leche Vegetal <span id="lecheVegetal">1 taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/miel.jpg') }}" class="me-2" style="width: 40px; height: 40px;" alt="Miel">
                        Miel <span id="miel">1/4 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/canela.jpg') }}" class="me-2" style="width: 40px; height: 40px;" alt="Canela">
                        Canela <span id="canela">1/2 cucharadita</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/avena.jpg') }}" class="me-2" style="width: 40px; height: 40px;" alt="Avena">
                        Avena <span id="avena">70 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/agua.jpg') }}" class="me-2" style="width: 40px; height: 40px;" alt="Agua">
                        Agua <span id="agua">1 taza</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">Ralla la zanahoria y reserva.</li>
                    <li data-number="2">Calienta el agua en un cazo y cuando rompa a hervir, añade la avena.</li>
                    <li data-number="3">Añade la crema de almendras y remueve hasta que se deshaga.</li>
                    <li data-number="4">Añade la leche vegetal, la miel, la canela y la zanahoria rallada y cocina durante un par de minutos hasta que la avena tenga una consistencia más cremosa.</li>
                    <li data-number="5">Retira del fuego y sirve en un bowl. Puedes añadir tus toppings favoritos, como unos arándanos, unas uvas pasas, semillas, más zanahoria rallada o una onza de chocolate para que se derrita con el calor.</li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Para darle mayor sabor y que se asemeje a la tarta de zanahoria puedes añadir también una pizca de nuez moscada y jengibre.
                    <br>
                    Puedes sustituir la miel por tu endulzante favorito o no añadir nada y endulzar solo con unas uvas pasas.  
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection