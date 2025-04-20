@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', 'Tortilla de Champiñones y Jamón 🍳🍖 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/tortilla-de-champinones-y-jamon.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Tortilla de Champiñones y Jamón</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Una tortilla sabrosa y saludable, perfecta para la cena, con champiñones frescos y jamón serrano.”
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
                    <i class="bi bi-clock icon"></i> Tiempo: 30'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Huevos <span>8 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Champiñones <span>250 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jamón serrano <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dientes de ajo <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Ramita de perejil <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pimienta negra <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Limpia los champiñones, elimina la parte terrosa, lávalos y sécalos con papel de cocina. Lamina los champiñones y pela y pica finamente el ajo. Lava y seca el perejil y pícalo. Corta el jamón en daditos.
                    </li>
                    <li data-number="2">
                        Sofríe el ajo en una sartén con una cucharada de aceite de oliva caliente. Agrega los champiñones, saltéalos durante 5 minutos y retira del fuego. Añade el jamón y el perejil.
                    </li>
                    <li data-number="3">
                        Bate los huevos en un cuenco, añade una pizca de sal y el sofrito anterior, mezclando bien los ingredientes.
                    </li>
                    <li data-number="4">
                        Engrasa una sartén grande con un poco de aceite y ponla al fuego. Vierte la mezcla y deja que cuaje durante 4 minutos. Dale la vuelta y cocina 4 minutos más por el otro lado.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Para un toque extra de sabor, añade un poco de queso rallado a la mezcla antes de cuajar la tortilla.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection