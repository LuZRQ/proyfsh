@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', ' Sorbete de Melocotón 🍑✨')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/sorbete-de-melocoton.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Sorbete de Melocotón</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “En verano, lo más habitual es consumir helados, pero también hay otras opciones algo más saludables como los sorbetes. Sorprende a tus invitados en cualquier comida con este sorbete de melocotón. ¡Riquísimo!”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 4
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
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes (para 4 personas)</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Melocotones <span>4 o 5 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Limón <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Azúcar <span>50 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Agua mineral <span>150 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Yogur natural griego <span>1/4 de litro</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Galletas <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Almendras <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Hojitas de menta <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Pela los melocotones, pártelos por la mitad, retira el hueso con ayuda de un cuchillo romo y trocéalos. Mézclalos con el agua, el zumo del limón, el azúcar y cuece 10 minutos. Deja enfriar.
                    </li>
                    <li data-number="2">
                        Tritura los melocotones con el almíbar, vierte en una fuente metálica y deja en el congelador.
                    </li>
                    <li data-number="3">
                        Cada 30 minutos, bate la mezcla. Hazlo 2 o 3 veces. Tritura de nuevo y congela.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
