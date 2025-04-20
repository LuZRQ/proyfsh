@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', '🧀Huevos con Tomate y Queso Feta🍳🍅')
@section('back_url', route('desayunos'))
@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/SartenHuevTomQue.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Sartén de Huevos con Tomate y Queso Feta</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “¡Aprende a preparar unos riquísimos huevos con tomate y queso feta en sartén! Una receta muy económica, fácil de hacer y deliciosa, que apetece en cualquier momento del día: desayuno, almuerzo o cena.”        
                </p>
            </div>
        </div>

        <div class="col-8 text-center mt-4">
            <div class="d-flex ">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0 " style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">Equipo Sweet Home</p>
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
            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-outline-secondary me-3" id="decrease">-</button>
                <span id="portionCount" class="mx-2">1</span> Porciones
                <button class="ms-3 btn btn-outline-secondary" id="increase">+</button>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes frescos</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/cebolla_morada.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Cebolla Morada <span id="cebollaMorada">1/4 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/ajo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Ajo <span id="ajo">1/2 diente</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/tomate.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Tomate <span id="tomate">300 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/huevo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Huevo <span id="huevo">2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/queso_feta.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Queso Feta <span id="quesoFeta">25 gramos</span>
                    </li>
                </ul>
                <br>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/sal.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Sal <span id="sal">1/2 pizca </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/pimienta_negra.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Pimienta Negra <span id="pimientaNegra">1/2 pizca</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_oliva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite De Oliva <span id="aceiteOliva">1 cucharada</span>
                    </li>
                </ul>
            
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Pica el ajo y corta la cebolla en tiras finas. Sofríe ambas verduras en una sartén con aceite (si te gusta el picante puedes añadir también una cayena).
                    </li>
                    <li data-number="2">
                        Lava los tomates y córtalos en dados tamaño medio. Puedes emplear tomates pelados de lata. Incorpora el tomate y cocina unos 10 minutos hasta que se reduzca el líquido.               
                    </li>
                    <li data-number="3">
                        Haz dos huecos en la salsa de tomate y vierte en ellos los huevos con una pizca de sal. Pon una tapa y deja que se cuajen.         
                    </li>
                    <li data-number="4">
                        Añade queso feta desmenuzado alrededor de los huevos y, opcionalmente, un poco de cilantro picado.                
                    </li>       
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Nosotros empleamos tomates pelados de lata.
                    <br>
                    Puedes añadir un poco de pimentón, orégano, etc.
                    <br>
                    Acompaña esta sartén de un buen trozo de pan. 
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection