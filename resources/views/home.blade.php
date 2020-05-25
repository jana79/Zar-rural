@extends('layouts.layoutGral')

@section('infoGeneral')

@if(Auth::user()->bloqueado ==1)
<div class="container mt-3 mb-3 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center pt-5 mx-auto">Su usuario ha sido bloqueado 
        por no cumplir con la política de publicación de la aplicación.
        Puede ponerse en contacto con el administrador para resolver sus dudas.</h2>
    <div class="col-sm-9 offset-sm-4 pt-3 pb-5">
        <a href="{{url('contacta')}}" 
           class="btn btn-verde">
            Contacto
        </a>         
    </div>	  
</div>
@else
<div>
    <h1>Bienvenido a Zar~rural</h1>
</div>
<p class="lead text-center">Si estás buscando un plan para el fin de semana, 
    Semana Santa o incluso vacaciones, ¡estás en el sitio correcto!.</p>
<p class="text-center"> Zaragoza es una provincia que encierra muchísimos tesoros por 
    descubrir a nivel de patrimonio, cultura, ocio y naturaleza. 
    Puedes buscar la población que quieras para consultar su oferta 
    de actividades o buscar entre las actividades disponibles 
    aquella que te apetezca probar. ¡Esperamos que disfrutes!</p>
<div class="row container mx-auto pt-3">
    @foreach($actividades as $actividad)
    <?php $muestra = Str::limit($actividad->descripcion_actividad, 205, "..."); ?>
    @if($actividad->id_actividad > 5 && $actividad->id_actividad < 9 )
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 pt-3  text-center verde">{{$actividad->titulo}}</h4>
        <img class="img-fluid" src="{{asset('images/'.$actividad->portada)}}" 
             alt="{{$actividad->titulo}}">
        <p class="pt-4">{{$muestra}}</p>
        <div class="d-flex justify-content-center py-3">
            <a href="{{route('actividad.show',$actividad->id_actividad)}}" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
   @endif
    @endforeach
</div>

@endif

@endsection
