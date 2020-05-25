@extends("layouts.layoutGral")

@section("infoGeneral")

<h1>Actividades de Ocio</h1>
<div class="row container mx-auto pt-2">
    @foreach($actividades as $actividad)
    @if($actividad->categoria =="Ocio")
    <?php $muestra = Str::limit($actividad->descripcion_actividad, 205, "..."); ?>
    <div class="col-12 col-md-4">    
        <h4 class="h4 pb-3 pt-3 text-center verde">{{$actividad->titulo}}</h4>
        <img class="img-fluid" src="{{asset('images/'.$actividad->portada)}}" 
             alt="{{$actividad->titulo}}">
        <p class="pt-4">{{$muestra}}</p>
        <div class="d-flex justify-content-center py-3">
            <a href="{{route('actividad.show',$actividad->id_actividad)}}"
               class="btn btn-verde">Ver actividad</a>
        </div>
    </div>
    @endif
    @endforeach
    <div class="col-lg-12 d-flex justify-content-end mt-4">
        <a href="{{url('/actividad')}}"
           class="btn btn-verde">Volver</a>
    </div>
</div>



@endsection
