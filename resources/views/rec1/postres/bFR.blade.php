@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', ' Brownie con Frutas 🍫🍓')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/brownie-con-frutas.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Brownie con Frutas</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Hay muchas formas de disfrutar de un brownie. Si quieres hacerlo de una forma más fit y libre de azúcares, prueba la receta que te proponemos a continuación. ¡Está de rechupete!”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 7
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 50'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes (para 8-10 personas)</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Chocolate negro fondant <span>300 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Azúcar moreno <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Mantequilla <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Harina <span>60 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cacao <span>30 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Huevos <span>3 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Frutas secas <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Precalienta el horno a 180 °C. Forra con papel de horno un molde cuadrado de 22 cm de lado. Funde el chocolate y mézclalo con la mantequilla. Bate el azúcar con los huevos hasta que la masa doble el volumen.
                    </li>
                    <li data-number="2">
                        Incorpora la mezcla de chocolate a los huevos y remueve hasta que se integre. Agrega la harina y el cacao tamizados, y vuelve a mezclar.
                    </li>
                    <li data-number="3">
                        Vierte en el molde la crema preparada y alisa la superficie con una espátula de silicona. Espolvoréala con las frutas secas troceadas y hornea durante unos 30 minutos. Retira y deja enfriar.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
