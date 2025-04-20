@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', '🥯Bagel de Atún 🐟')

@section('back_url', route('desayunos'))

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/bagelAtun.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Bagel de Atún</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Prepara un desayuno saludable hoy.”
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
                        <img src="{{ asset('imgIngredient/lechuga.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Lechuga <span id="lechuga">2 puñados</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/cebolla.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Cebolla <span id="cebolla">1/4 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/tomate.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Tomate <span id="tomate">1/4 unidad</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/atún_en_conserva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Atún En Conserva <span id="atunConserva">1/2 lata pequeña</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/pan.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Pan <span id="pan">1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/mayonesa.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Mayonesa <span id="mayonesa">1 cucharada</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">Corta la cebolla y el tomate en rodajas finas.</li>
                    <li data-number="2">Escurre el atún de su lata.</li>
                    <li data-number="3">Pon a tostar los panes.</li>
                    <li data-number="4">Extiende la mayonesa por encima de cada pan, añade una capa de lechuga, un poco de cebolla, el tomate cortado y el atún escurrido. Termina añadiendo un poco más de lechuga y cierra el bocadillo con uno de los panes. ¡Listo!</li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    ¡Acompaña con una bebida nutritiva!
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection