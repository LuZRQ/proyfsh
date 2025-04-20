@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', '🥞 Crepes Caseras 🍯 ')
@section('back_url', route('desayunos'))
@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/CrepesCaser3.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Crepes Caseras 3 Ingredientes</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Esta receta de crepes no puede ser más fácil y con menos ingredientes. Las puedes rellenar con dulce o con salado porque son perfecta en cualquiera de los casos.”
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

    <div class="row justify-content-center cud">
        <!-- Ingredientes y pasos -->
        <div class="col-8">
            <div class="d-flex justify-content-between mb-3 p-2 rounded caj">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 3
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 5'
                </span>
            </div>
            
            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-outline-secondary me-3" id="decrease">-</button>
                <span id="portionCount" class="mx-2">1</span> Porciones
                <button class="ms-3 btn btn-outline-secondary" id="increase">+</button>
            </div>

            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes frescos</h4>
            <br>
            <ul id="ingredientsList" class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/leche.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Leche <span id="leche">150 mililitros</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/huevo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Huevo <span id="huevo">1 unidad</span>
                </li>
            </ul>

            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
            <br>
            <ul id="ingredientsList" class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/avena.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Avena <span id="avena">40 gramos</span>
                </li>
            </ul>

            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
            <ul class="custom-list">
                <li data-number="1">
                    Vierte todos los ingredientes en tu batidora o procesador de alimentos, y tritura muy bien, hasta que no quede ningún grumo.
                </li>
                <li data-number="2">
                    Calienta una sartén, engrásala con unas gotas de aceite y vierte un poco de la mezcla. Ve moviendo la sartén hasta que la masa cubra toda la sartén. Cocina hasta que a la masa le salgan burbujitas. Con una espátula, dale la vuelta.
                </li>
                <li data-number="3">
                    Repite la operación hasta agotar la masa.
                </li>
            </ul>

            <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                Trucos y Consejos
            </h4>
            <p class="bg-light p-3 rounded">
                Rellénalas como más tu guste, nosotros le pusimos lonchas de pavo y queso, las pusimos vuelta y vuelta para que se fundiera el queso y quedaron estupendas.
            </p>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection