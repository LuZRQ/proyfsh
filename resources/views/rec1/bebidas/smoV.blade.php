@extends('layouts.app2')

@section('title','Bebidas')
@section('back_url', route('bebidas'))
@section('header_title', ' Batido Verde para Desayunar 🥬🥝')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/Smoothie-Verde.png') }}" alt="Smoothie Verde" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Batido Verde para Desayunar</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    ¿Sabías que un batido te da todos los nutrientes necesarios para cubrir las necesidades energéticas de un buen desayuno? Si empiezas, no podrás parar. Combina las frutas y verduras frescas que tengas en la nevera. Aunque para introducirte en ellos puedes hacer este, ¡está buenísimo!
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 6
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 10'
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
                        Espinaca <span id="espinaca">1/2 taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/agua.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Agua <span id="agua">1/4 taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/naranja.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Naranja <span id="naranja">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/apio.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Apio <span id="apio">1/2 rama</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/plátano.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Plátano <span id="platano">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/piña.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Piña <span id="pina">50 gramos</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Echa las espinacas y el agua en el vaso de la batidora o robot de cocina. Tritura durante 20-30 segundos hasta que se haga un zumo verde.
                    </li>
                    <li data-number="2">
                        Pela el plátano, la naranja y la piña. Lava el apio. Luego, añádelos todos al zumo verde.
                    </li>
                    <li data-number="3">
                        Tritura durante un minuto hasta tener una mezcla homogénea. ¡Disfruta!
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes añadir una cucharada de proteína vegetal natural o sabor vainilla y lograr un batido súper nutritivo. Recuerda que la piña ha de ser natural, aunque puedes hacer un apaño con piña de lata, ¡pero en su jugo!
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection