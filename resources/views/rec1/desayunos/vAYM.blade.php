@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', '🥗 Vasito Nutritivo 🍓')

@section('back_url', route('desayunos'))

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/VasitoAvenaYogurmelocoton.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Vasito de Avena y Yogur con Melocotón</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Aprovecha la temporada de melocotones para prepararte ricos desayunos y meriendas como los que te traemos hoy.”
                </p>
            </div>
        </div>
        
        <div class="col-8 text-center mt-4">
            <div class="d-flex ">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">Equipo Sweet Home</p>
            </div>
            <br>
        </div>
    </div>

    <div class="row justify-content-center cud">
        <!-- Ingredientes y pasos -->
        <div class="col-8">
            <div class="d-flex justify-content-between mb-3  p-2 rounded caj">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 8
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

            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes frescos</h4>
            <ul id="ingredientsList" class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/yogur.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Yogur <span id="yogur">1 unidad</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/melocotón.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Melocotón <span id="melocoton">1/2 unidad</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/mantequilla.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Mantequilla <span id="mantequilla">1/2 cucharadita</span>
                </li>
            </ul>

            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
            <ul id="ingredientsList" class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/avena.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Avena <span id="avena">1/2 taza</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/semilla_de_chía.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Semilla De Chía <span id="semiallaChia">1/2 cucharadita</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/miel.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Miel <span id="miel">1 cucharadita</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/canela.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Canela <span id="canela">1/2 pizca</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <img src="{{ asset('imgIngredient/mermelada_de_albaricoque.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                    Mermelada De Albaricoque <span id="mermeladaAlbaricoque">1 cucharadita</span>
                </li>
            </ul>

            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
            <ul class="custom-list">
                <li data-number="1">En un recipiente vierte el yogur, la avena, la miel y las semillas de chía. Mezcla bien y reparte en dos vasos.</li>
                <li data-number="2">Mételos en la nevera durante un par de horas.</li>
                <li data-number="3">Pela el melocotón y córtalo en trozos pequeños.</li>
                <li data-number="4">Pon una pizca de mantequilla en una sartén y calienta hasta que se derrita. Vierte los trozos de melocotón y dóralos a fuego medio. Añade la canela y mezcla hasta que queden dorados y blandos.</li>
                <li data-number="5">Saca los vasitos de la nevera. Añade por encima un poco de mermelada y los trozos de melocotón. ¡Listos!</li>
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
