@extends("layouts.layoutGral")

@section("infoGeneral")

<h1>{{$actividad->titulo}}</h1>
{{$datos}}
<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/',$actividad->portada)}}" 
                         alt="{{$actividad->titulo}}" 
                         class="img-fluid portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">{{$actividad->descripcion_actividad}}</p>           
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div class="my-auto">
                        
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div class="my-auto">
                        
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="col-lg-12 d-flex justify-content-end mt-4">
        <a href="{{route('poblaciones.show',$actividad->poblacion_id)}}"
           class="btn btn-verde">Volver a población</a>
    </div>
</div>
@endsection
