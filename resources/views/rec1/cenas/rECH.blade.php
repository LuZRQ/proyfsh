@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', 'Revuelto de Espárragos y Champiñones 🍳🍄 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/recetas-saciantes-revuelto-esparragos-champinones.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Revuelto de Espárragos y Champiñones</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Un plato sencillo y delicioso que combina la frescura de los espárragos con el sabor de los champiñones.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 8
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 15'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Espárragos trigueros <span>2 manojos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Huevos <span>8 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Champiñones <span>150 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Ajo en polvo <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pimienta <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Pela los espárragos con un pelador para retirar la parte fibrosa y escáldalos en agua hirviendo con sal durante 3 minutos.
                    </li>
                    <li data-number="2">
                        Lava los champiñones, sécalos con un paño de algodón y córtalos en cuartos.
                    </li>
                    <li data-number="3">
                        En una sartén con dos cucharadas de aceite de oliva bien caliente, saltea los champiñones durante 2 minutos.
                    </li>
                    <li data-number="4">
                        Añade los espárragos y cocina 1 minuto más.
                    </li>
                    <li data-number="5">
                        Bate los huevos en un cuenco y añádelos a la sartén junto con los espárragos y los champiñones.
                    </li>
                    <li data-number="6">
                        Añade una pizca de sal, pimienta y un poco de ajo en polvo.
                    </li>
                    <li data-number="7">
                        Cocina hasta que el huevo adquiera la textura deseada y sírvelo recién hecho con rebanadas de pan tostado.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes añadir queso rallado al gusto para darle un toque más cremoso al revuelto.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection