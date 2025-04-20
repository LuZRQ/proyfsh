@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', 'Lasaña Vegetal Ligera 🍝🥬 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/lasana-vegetal-light.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Lasaña Vegetal Light</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Una opción deliciosa y saludable que combina verduras frescas y una salsa cremosa.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 11
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Media
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 40'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Placas de lasaña precocida <span>1 paquete</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Zanahorias <span>3 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Calabacín <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Berenjena <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Champiñones <span>200 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Espinacas frescas <span>200 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Harina <span>1 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Salsa de tomate <span>200 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Leche desnatada <span>500 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Queso rallado <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Precalienta el horno a 170ºC. Calienta en una sartén dos cucharadas de aceite de oliva y tuesta la harina.
                    </li>
                    <li data-number="2">
                        Vierte la leche en un hilo sin dejar de mover. Sazona y cocina hasta que espese. Cuece las espinacas al vapor y mézclalas con un poco de bechamel.
                    </li>
                    <li data-number="3">
                        Pela y corta las verduras y resérvalas. Sofríe el calabacín y la zanahoria 2 minutos, incorpora la berenjena y cocina 4 minutos, añade los champiñones y cocina durante 2 minutos más.
                    </li>
                    <li data-number="4">
                        Incorpora las espinacas a las verduras. Cuece la pasta según las instrucciones del fabricante y déjala escurrir en un paño de algodón.
                    </li>
                    <li data-number="5">
                        Monta la lasaña alternando capas de pasta con verdura y salsa de tomate. Cubre con la bechamel restante, espolvorea con el queso rallado y hornea durante 20 minutos.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes añadir más verduras como pimientos o cebollas para darle más sabor a tu lasaña.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection