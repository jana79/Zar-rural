@extends("layouts.layoutGral")


@section("infoGeneral")
<h1>Bienvenido a la sección de Actividades</h1>
<p class="text-center">Encuentra tu próximo plan.</p>
<div class="row container mx-auto pt-3">
    <div class="col-12 col-md-6">  
        <h3 class="text-center verde py-4">Naturaleza</h3>
        <a href=""> 
            <img class=" img-fluid" src="{{asset('/images/cascada.jpg')}}" 
                 alt="Naturaleza">
        </a>      
    </div>
    <div class="col-12 col-md-6"> 
        <h3 class="text-center verde py-4">Patrimonio</h3>
        <a href="#"> 
            <img class=" img-fluid" src="{{asset('/images/colegiata.jpg')}}" 
                 alt="Patrimonio">
        </a>      
    </div>
</div>

<div class="row container mx-auto pt-3 pb-5">
    <div class="col-12 col-md-6">  
        <h3 class="text-center verde py-4">Ocio</h3>
        <a href="#"> 
            <img class=" img-fluid" src="{{asset('/images/museoVino.jpg')}}" 
                 alt="Ocio">
        </a>        
    </div>
    <div class="col-12 col-md-6"> 
        <h3 class="text-center verde py-4">Tradición</h3>
        <a href="#"> 
            <img class=" img-fluid" src="{{asset('/images/contradanza.jpg')}}" 
                 alt="Tradición">
        </a>      
    </div>
</div>


@endsection

