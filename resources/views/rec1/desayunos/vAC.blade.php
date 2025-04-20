@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', ' 🥣 Vasito de Avena y Chocolate 🍫 ')
@section('back_url', route('desayunos'))
@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/VasitoAvenChocolate.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Vasito de Avena y Chocolate</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Si sientes que necesitas un poco de energía, prepara este vasito de avena y verás lo rico que está y lo bien que te sienta. Después de comerlo, ¡seguro que puedes con todo!”
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
                    <i class="bi bi-clock icon"></i> Tiempo: 15'
                </span>
            </div>
            <br>
            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-outline-secondary me-3" id="decrease">-</button>
                <span id="portionCount" class="mx-2">1</span> Porciones
                <button class="ms-3 btn btn-outline-secondary" id="increase">+</button>
            </div>
            <br>

            <!-- Ingredientes frescos -->
            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes frescos</h4>
            <br>
            <ul id="ingredientsList" class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/yogur_griego.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Yogur Griego <span id="yogurGriego">1/2 unidad</span>
                </li>
            </ul>

            <!-- Ingredientes de despensa -->
            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
            <br>
            <ul id="ingredientsList" class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/avena.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Avena <span id="avena">4 cucharadas</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/crema_de_cacahuete.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Crema De Cacahuete <span id="cremaCacahuete">1 cucharadita</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/miel.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Miel <span id="miel">1 cucharadita</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/leche.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Leche <span id="leche">1/4 taza</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/chocolate_negro.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Chocolate Negro <span id="chocolateNegro">15 gramos</span>
                </li>
            </ul>

            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
            <ul class="custom-list">
                <li data-number="1">En un vasito vierte la avena y la leche, mezcla.</li>
                <li data-number="2">Añade el yogur, la miel y la crema de cacahuete, y vuelve a mezclar hasta que queden bien integrados los ingredientes.</li>
                <li data-number="3">Reparte la mezcla en dos vasitos y mete en la nevera durante un par de horas.</li>
                <li data-number="4">Cuando lo vayas a consumir, un par de minutos antes, saca un cazo y coloca un poco de agua. Introduce en el cazo un cuenco con las onzas de chocolate negro. Cocina al baño maría hasta que se derrita el chocolate.</li>
                <li data-number="5">Vierte el chocolate por encima de los vasitos y deja enfriar. Puedes meterlo en la nevera para acelerar el proceso.</li>
            </ul>

            <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                Trucos y Consejos
            </h4>
            <p class="bg-light p-3 rounded">
              ¡Decora a tu gusto!
            </p>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection