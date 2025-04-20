@extends('layouts.app2')

@section('title','Bebidas')
@section('back_url', route('bebidas'))
@section('header_title', ' Smoothie Cremoso de Melocotón 🍑🍶')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/smoothie-melocoton-yogur.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Smoothie o Batido Cremoso de Melocotón y Yogur</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Un batido refrescante y nutritivo, perfecto para cualquier momento del día.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 6
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 10'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Melocotón maduro <span>500 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Yogur griego sin azúcar <span>150 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Zumo de limón o lima <span>5 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Leche <span>necesaria</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Zumo de naranja <span>(opcional)</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Miel <span>(opcional)</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Menta fresca, hierbabuena o albahaca <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lavar bien y secar los melocotones. Pelarlos y trocearlos, desechando los huesos. Colocarlos en una bolsa de congelación e introducirlos en el congelador como mínimo una hora.
                    </li>
                    <li data-number="2">
                        Batir el yogur griego y mezclarlo con un poco de sirope de ágave o miel (opcional, no hace falta si la fruta es dulce y aromática).
                    </li>
                    <li data-number="3">
                        Introducir el melocotón congelado en una picadora o batidora de vaso y comenzar a triturar.
                    </li>
                    <li data-number="4">
                        Añadir el yogur y el zumo de limón y continuar picando hasta conseguir una textura homogénea.
                    </li>
                    <li data-number="5">
                        Agregar un poco de leche o de zumo de naranja, poco a poco, si quedara demasiado espeso.
                    </li>
                    <li data-number="6">
                        Corregir el punto de dulzor añadiendo más sirope o miel al gusto, solo si fuera realmente necesario.
                    </li>
                    <li data-number="7">
                        Servir inmediatamente o guardar en un recipiente hermético en la nevera.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes añadir un toque de hojas de menta o albahaca para realzar el sabor.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection