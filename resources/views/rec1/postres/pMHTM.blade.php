@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', 'Papaya y Mango con Helado de Té Matcha 🍧🍵 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/papaya-y-mango-con-helado-de-te-matcha.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Papaya y Mango con Helado de Té Matcha</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Si quieres disfrutar de un postre refrescante y muy apetecible, este postre de papaya y mango es perfecto para ti. Acompáñalo con un helado de té matcha y un crocanti de frutos secos.”
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
                    <i class="bi bi-trophy icon"></i> Dificultad: Media
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 45'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes (para 4 personas)</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Mango natural <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Papaya natural <span>½ unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Leche de soja <span>500 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Nata de soja <span>250 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Té matcha en polvo <span>3 cucharaditas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Fructosa natural (para el helado) <span>150 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Almendras crudas sin piel (para el crocanti) <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pistachos crudos (para el crocanti) <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Fructosa natural (para el crocanti) <span>150 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Chorrito de agua (para el crocanti) <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        En la batidora vierte la bebida de soja, agrega la nata, la fructosa y el té matcha para mezclarlo todo.
                    </li>
                    <li data-number="2">
                        Vierte la mezcla en un tupper y déjalo dos horas en el congelador. Transcurrido ese tiempo, remueve la mezcla y vuelve a dejarla en el congelador. Repite el proceso cada 30 minutos.
                    </li>
                    <li data-number="3">
                        Para el crocanti, pica los pistachos y las almendras. Prepara un almíbar denso o caramelo con fructosa y agua, y agrega los frutos secos.
                    </li>
                    <li data-number="4">
                        Reparte la preparación en un molde de silicona y deja que se enfríe. Una vez se haya endurecido el caramelo con los frutos secos, machácalo sobre una tabla de madera con un mazo de mortero.
                    </li>
                    <li data-number="5">
                        Pela el mango y la papaya y córtalo en cubitos de 1 cm. Coloca encima un par de bolas de helado.
                    </li>
                    <li data-number="6">
                        Añade el toque con el crocanti de frutos secos y flores comestibles.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
