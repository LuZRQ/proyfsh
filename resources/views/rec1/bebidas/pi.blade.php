@extends('layouts.app2')

@section('title','Bebidas')
@section('back_url', route('bebidas'))
@section('header_title', 'Piñada 🍍🥥 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/piñada.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Piñada</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Prepara algo fresco y picosito para un día caluroso: piñada hecha con piña natural y acompañada de una salsa de jamaica con jugo maggi®.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: Noé Medina
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 8
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 11'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 taza de piña congelada <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 1/2 tazas de néctar de piña <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        6 cucharadas de azúcar <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        jugo de 4 limones <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 cucharada de jugo maggi® <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        2 cucharadas de chile en polvo <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1/2 taza de concentrado de jamaica <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        2 triángulos de piña con cáscara <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        2 paletas tamarindo con chile <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        tiras de dulce enchilado sabor chamoy <span></span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">¡A cocinar!</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Licúa la piña, el néctar de piña, el azúcar y el jugo de limón.
                    </li>
                    <li data-number="2">
                        Para la salsa de jamaica, mezcla el jugo maggi®, el chile en polvo y el concentrado de jamaica.
                    </li>
                    <li data-number="3">
                        En dos vasos escarchados con chile, sirve un poco de la salsa de jamaica, vierte la mitad de la mezcla de piña. Decora con los triángulos de piña y las paletas de tamarindo, un poco más de salsa y las tiras de dulce enchilado sabor chamoy; ofrece.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Consejos" class="me-2" style="width: 50px; height: 50px;">
                    Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    La piña aporta vitamina C.
                </p>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/nutrition.png') }}" alt="Información Nutricional" class="me-2" style="width: 50px; height: 50px;">
                    Información Nutricional
                </h4>
                <p class="bg-light p-3 rounded">
                    584 kcal = 2,443 kj / por porción
                </p>
                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/advice.png') }}" alt="Consejo Culinario" class="me-2" style="width: 50px; height: 50px;">
                    Consejo Culinario
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes añadir una taza de hielo a la mezcla si deseas una consistencia más espesa.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection