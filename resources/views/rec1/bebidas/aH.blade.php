@extends('layouts.app2')

@section('title','Bebidas')
@section('back_url', route('bebidas'))
@section('header_title', 'Agua de Horchata 🥛🌾 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/aguahorchata.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Agua de Horchata</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Un clásico nunca se olvida. Prepara esta ICÓNICA AGUA de HORCHATA con la CREMOSIDAD de CARNATION® CLAVEL®. Ideal para todas tus comidas.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: Abraham Gómez (N)
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 7
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 8'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Lata de Leche Evaporada CARNATION® CLAVEL® <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Lata de Leche Condensada LA LECHERA® <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Taza de arroz cocido <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        4 Tazas de agua fría <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Raja de canela <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        2 Tazas de hielo <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Cucharada de canela molida <span></span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">¡A cocinar!</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Licúa el arroz con la Leche Condensada LA LECHERA®, la Leche Evaporada CARNATION® CLAVEL®, el agua y la canela.
                    </li>
                    <li data-number="2">
                        Cuela y sirve en vasos con hielo.
                    </li>
                    <li data-number="3">
                        Decora con canela molida.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Consejos" class="me-2" style="width: 50px; height: 50px;">
                    Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes agregar un poco de fresas picadas.
                </p>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/nutrition.png') }}" alt="Información Nutricional" class="me-2" style="width: 50px; height: 50px;">
                    Información Nutricional
                </h4>
                <p class="bg-light p-3 rounded">
                    286.7 kcal = 1,201 kj / por porción
                </p>
                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/advice.png') }}" alt="Consejo Nutricional" class="me-2" style="width: 50px; height: 50px;">
                    Consejo Nutricional
                </h4>
                <p class="bg-light p-3 rounded">
                    El consumo de arroz blanco aporta vitamina D.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection