@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', ' Pollo a la Plancha con Verduras 🌱🍗 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/pollo-a-la-plancha-con-verduras-al-pesto.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Pollo a la Plancha con Verduras al Pesto</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “El pollo a la plancha siempre será un plato ligero y apetecible. Además, es muy versátil y puedes darle sabor de muchas formas. Aquí te lo presentamos con verduras al pesto, ideal para una comida saludable y nutritiva.”
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
                    <i class="bi bi-clock icon"></i> Tiempo: 20'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pechuga de pollo en filetes <span>600 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Espárragos verdes <span>6 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Zanahoria <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cebolla <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Coliflor <span>1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Tomates <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Limón <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Salsa pesto <span>50 g</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava los espárragos, la coliflor y las zanahorias. Raspa las zanahorias, trocea los espárragos y separa la coliflor en ramitos pequeños. Pela la cebolla y córtala en plumas.
                    </li>
                    <li data-number="2">
                        Sofríe las verduras en una sartén con 3 cucharadas de aceite de oliva extra virgen (AOVE) durante 10 minutos. Añade el pesto durante los últimos 3 minutos y mezcla bien. Rectifica la sal si es necesario.
                    </li>
                    <li data-number="3">
                        Mientras las verduras se sofríen, limpia los filetes de pollo, rocíalos con el zumo de limón y dóralos en una plancha durante 2-3 minutos por cada lado.
                    </li>
                    <li data-number="4">
                        Pela los tomates, quita las semillas, córtalos en daditos y sazónalos. Reparte las verduras en los platos, coloca el pollo encima y decora con albahaca y cebollino.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Para que el pollo quede más jugoso, sácalo de la nevera 15-30 minutos antes de cocinarlo.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection