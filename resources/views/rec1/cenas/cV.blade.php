@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', 'Cuscús con Verduras 🥗🍴 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/cenas-sanas-cuscus-frutos-secos.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Cuscús con Verduras</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Un plato nutritivo y colorido que combina el sabor del cuscús con una variedad de verduras frescas.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 9
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 25'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cuscús <span>350 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Caldo de verduras <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cebolla <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pimiento rojo <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Zanahorias <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Calabacín <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Tomate <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pasas <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Almendras <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Avellanas <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Comino <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Pela la cebolla y las zanahorias. Pica todas las verduras en cuadraditos pequeños y resérvalas por separado.
                    </li>
                    <li data-number="2">
                        En una sartén con dos cucharadas de aceite de oliva caliente, sofríe la cebolla durante 2 minutos.
                    </li>
                    <li data-number="3">
                        Añade la zanahoria y el pimiento, y cocina 2 minutos más.
                    </li>
                    <li data-number="4">
                        Añade el calabacín y cocina otros 2 minutos.
                    </li>
                    <li data-number="5">
                        Por último, incorpora el tomate y déjalo cocinar 5 minutos más. Sazona con comino y sal al gusto.
                    </li>
                    <li data-number="6">
                        Reserva las verduras.
                    </li>
                    <li data-number="7">
                        En otra sartén con una cucharada de aceite de oliva caliente, tuesta el cuscús.
                    </li>
                    <li data-number="8">
                        Calienta el caldo y añade la misma cantidad en volumen que de cuscús. Tápalo, apaga el fuego y deja que se cocine durante 5 minutos.
                    </li>
                    <li data-number="9">
                        Con ayuda de un mortero, machaca las almendras y las avellanas hasta que queden picadas.
                    </li>
                    <li data-number="10">
                        Reparte el cuscús en boles individuales, añade el sofrito de verduras por encima, decora con la picada de frutos secos y las pasas, y añade un hilo de aceite de oliva.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes variar las verduras según la temporada y añadir tus frutos secos favoritos para un sabor diferente.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection