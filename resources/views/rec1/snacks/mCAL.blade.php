@extends('layouts.app2')

@section('title','Snacks')
@section('back_url', route('snacks'))
@section('header_title', 'Muffins de Calabaza 🧁🎃 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/muffins-de-calabaza.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Muffins de Calabaza</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “La calabaza es una excelente fuente de nutrientes, como vitamina C y A, fibra y antioxidantes. Estos muffins pueden ser preparados con ingredientes saludables como harina grain free y miel natural, en lugar de azúcar refinada y harina blanca. Esto los convierte en una opción más nutritiva. Conoce nuestra receta de muffins de calabaza.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: Sweet Home
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 10
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 30'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Guayabas licuadas y coladas <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cambures/Bananas <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Puré de calabaza/Auyama <span>1 taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Agua <span>¼ taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Miel <span>2 ½ cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Vainilla <span>1 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Harina todo uso grain free <span>½ taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Canela <span>1 ½ cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Polvo para hornear grain free <span>½ cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Goma guar <span>1 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jengibre rallado <span>1/3</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Nuez moscada <span>1 cucharadita</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Preparación</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Precalienta el horno a 180º C.
                    </li>
                    <li data-number="2">
                        Licúa las guayabas y cuela.
                    </li>
                    <li data-number="3">
                        Añade el cambur/banana, el puré de calabaza/auyama, el agua, la miel y la vainilla.
                    </li>
                    <li data-number="4">
                        Mezcla todos los ingredientes secos.
                    </li>
                    <li data-number="5">
                        En un bowl agrega la mezcla y bate poco a poco mientras se agrega la mezcla seca hasta que se vuelva una pasta.
                    </li>
                    <li data-number="6">
                        Coloca la mezcla en los capacillos de ponques y hornea por ½ hora.
                    </li>
                    <li data-number="7">
                        Retira, deja enfriar y disfruta.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection