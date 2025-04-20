@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', 'Salmón con Verduritas 🐟🥕 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/cenas-sanas-salmon-esparragos-silvestres.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Salmón con Verduritas en su Jugo</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Una cena saludable y deliciosa, perfecta para disfrutar del sabor natural del salmón y las verduras.”
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
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
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
                        Lomos de salmón <span>4 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Brócoli <span>½ unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Tomates cherry <span>16 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Espárragos verdes <span>16 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cebolla <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Limón <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal y pimienta <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Precalienta el horno a 180ºC y lava los lomos de salmón. Lava el brócoli y sepáralo en ramitas. Pela y pica la cebolla en juliana. Lava los espárragos y los tomates.
                    </li>
                    <li data-number="2">
                        Coloca en un bol las ramitas de brócoli junto con los espárragos, los tomates cherry y la cebolla. Añade sal, pimienta y un chorrito de aceite de oliva, y mezcla bien.
                    </li>
                    <li data-number="3">
                        Corta 4 hojas de papel sulfurizado (40 cm de lado) y dóblalas a la mitad. Vuelve a desdoblarlas y pinta con aceite de oliva la cara interior del papel dejando un margen limpio. Coloca las verduritas sazonadas, el salmón salpimentado y una rodaja de limón en cada hoja.
                    </li>
                    <li data-number="4">
                        Cierra bien los paquetitos y hornea durante 15 minutos. Sirve el papillote acompañado por una salsa de yogur si lo deseas.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes preparar una deliciosa salsa de yogur mezclando un yogur griego con aceite de oliva, sal, pimienta, cebollino o cilantro fresco picado, y un chorrito de zumo de limón.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection