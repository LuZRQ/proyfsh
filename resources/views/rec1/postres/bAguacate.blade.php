@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', 'Bizcocho de Aguacate 🥑🍰 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/bizcocho-de-aguacate.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Bizcocho de Aguacate</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Si estás buscando una receta de postre sin azúcar, sin lactosa o sin gluten... ¡Estás de suerte! A continuación, te dejamos una sabrosa receta de bizcocho de aguacate que te encantará.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: RBA
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
                    <i class="bi bi-trophy icon"></i> Dificultad: Media
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 1h 20'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes (para 12 personas)</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aguacates maduros <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Limón <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Huevos <span>5 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sirope de agave <span>250 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva <span>140 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Harina de trigo sarraceno <span>150 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Harina de arroz <span>150 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Maicena <span>50 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Levadura en polvo <span>18 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sirope de agave en polvo (para decorar) <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pistachos pelados (para decorar) <span>50 g</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava el limón, sécalo y ralla finamente la piel. Exprime medio y filtra el zumo resultante. Corta los aguacates por la mitad, retírales el hueso y pélalos. Tritura la pulpa de aguacate con unas gotas de zumo de limón hasta el momento de añadirla a la masa.
                    </li>
                    <li data-number="2">
                        Precalienta el horno a 180 °C. Casca los huevos separando las claras de las yemas. Dispón las primeras en un cuenco, móntalas con unas varillas y resérvalas.
                    </li>
                    <li data-number="3">
                        Bate las yemas con el sirope de agave en otro cuenco, con varillas manuales, hasta que estén espumosas. Vierte aceite poco a poco, sin dejar de mezclar hasta que todo quede integrado.
                    </li>
                    <li data-number="4">
                        Añade el puré de aguacate y la ralladura de limón. Agrega los dos tipos de harina tamizados con maicena y la levadura para seguir mezclando todo hasta obtener una masa suave.
                    </li>
                    <li data-number="5">
                        Incorpora las claras montadas reservadas y realiza movimientos de arriba abajo para no perder volumen.
                    </li>
                    <li data-number="6">
                        Vierte la masa en un molde de plumcake previamente pincelado con aceite y hornéala durante 45 minutos. Retira el bizcocho y déjalo templar.
                    </li>
                    <li data-number="7">
                        Espolvorea el bizcocho con sirope de agave que le dará el toque dulce. Corta los pistachos y trocéalos.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
