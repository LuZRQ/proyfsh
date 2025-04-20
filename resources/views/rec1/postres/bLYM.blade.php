@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', 'Bavaroise de Lima y Mango 🍋🥭 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/bavaroise-de-lima-yogur-y-mango.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Bavaroise de Lima, Yogur y Mango</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Para una celebración especial, un postre especial (y saludable). Un postre cítrico y suave como esta receta con lima, yogur y mango. Es apto para vegetarianos y tiene pocas calorías.”
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
                    <i class="bi bi-clock icon"></i> Tiempo: 35'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes (para 6 personas)</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Yogures azucarados <span>3 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Limas <span>3 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Mango <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Láminas de gelatina <span>4 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Claras de huevo <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Azúcar <span>60 g</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava y seca las limas. A continuación, exprime 2 y cola el jugo obtenido. Corta el resto en tiras finas. Sigue pelando el mango, haz a trozos la pulpa y tritúrala, con la mitad del azúcar, hasta obtener una mezcla homogénea.
                    </li>
                    <li data-number="2">
                        Remoja las hojas de gelatina en agua fría durante aproximadamente 5 minutos hasta que se ablanden. Escúrrelas y disuélvelas en 3 cucharadas de agua caliente. Tamiza la preparación y añade el "puré" de mango que habías preparado. Remueve.
                    </li>
                    <li data-number="3">
                        Pon los yogures en un cuenco y agrega el azúcar restante. Monta las claras a punto de nieve bien firme (será más fácil si lo haces con varillas eléctricas) y agrégalas al yogur. Mezcla con movimientos envolventes para que no se pierda volumen.
                    </li>
                    <li data-number="4">
                        Reparte la crema obtenida en moldes pequeños tipo corona y déjalos reposar 60 minutos en la nevera.
                    </li>
                    <li data-number="5">
                        Añade el puré de mango y remueve ligeramente con un tenedor para que se mezcle con el yogur parcialmente. Intenta conseguir un efecto marmolado. Luego, déjalo cuajar durante 6 horas en la nevera.
                    </li>
                    <li data-number="6">
                        Retira las bavaroises de la nevera. Sumerge la base en agua templada, desmóldalas y sírvelas decoradas con las rodajas de lima. ¡Estarán de rechupete!
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
