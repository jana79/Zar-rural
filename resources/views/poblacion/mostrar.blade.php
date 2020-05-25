@extends("layouts.layoutGral")


@section("infoGeneral")

<h1>Bienvenido a {{$nombre_poblacion}}</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/'.$imagen_poblacion)}}" 
                         class="img-fluid portGral" 
                         alt= "{{$nombre_poblacion}}">
                </div>
            </header>
            <div>
                <p>{{$descripcion_poblacion}}</p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-4">
                    <h1>Actividades en {{$nombre_poblacion}}</h1>

                </div>
                <div class="row container mx-auto pt-2">
                    @foreach($actividades as $actividad)
                    <?php $muestra=Str::limit($actividad->descripcion_actividad, 195, "...");?>
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
                    @endforeach
                </div>
            </div>
        </article>
    </div>
</div>

@endsection

