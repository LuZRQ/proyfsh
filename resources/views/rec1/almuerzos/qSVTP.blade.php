@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', ' Quinoa y Tortilla con Pollo 🥗🍗 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/quinoa-salteada-con-verduras-tiras-de-tortilla-y-pollo.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Quinoa Salteada con Verduras, Tiras de Tortilla y Pollo</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Este plato de quinoa es saludable y sabroso, ya que, además de llevar verduras, pollo y tiras de tortilla, también está aderezado con salsa teriyaki y ralladura de jengibre. ¡Ideal para una comida nutritiva y deliciosa!”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 14
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
                        Quinoa <span>250 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pechugas de pollo <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Huevos <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Guisantes <span>30 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Zanahorias <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Diente de ajo <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cebolla <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jengibre <span>1 trozo</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Caldo de verduras <span>500 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Agua <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Salsa de soja <span>11 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Salsa teriyaki <span>1 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva virgen extra (AOVE) <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Perejil, sal y pimienta negra <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava bien la quinoa, añade el caldo de verduras a un cazo y, cuando esté hirviendo, agrega la quinoa lavada y los guisantes. Cocina durante 15 minutos.
                    </li>
                    <li data-number="2">
                        Mientras, bate los huevos, salpimienta y haz una tortilla fina en la sartén. Córtala en tiras.
                    </li>
                    <li data-number="3">
                        Limpia las pechugas de pollo, córtalas en tiras y saltéalas con una cucharada de AOVE durante 4 minutos. Retira del fuego y mézclalas con la salsa teriyaki.
                    </li>
                    <li data-number="4">
                        Pela y corta la cebolla en plumas, y rehógala con 3 cucharadas de AOVE durante 5 minutos.
                    </li>
                    <li data-number="5">
                        Pela y pica el ajo, ralla el jengibre y corta las zanahorias en tiras. Añade todo a la sartén con la cebolla y cocina durante 5 minutos.
                    </li>
                    <li data-number="6">
                        Agrega la quinoa cocida, la salsa de soja, el agua, las tiras de pollo y de tortilla. Remueve bien y sirve con perejil espolvoreado por encima.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    La quinoa está lista cuando se ha hinchado al doble de su tamaño. Para un toque extra de sabor, añade un poco de ralladura de limón al final.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection