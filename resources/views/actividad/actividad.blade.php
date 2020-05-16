@extends("layouts.layoutGral")

@section("infoGeneral")

<h1>{{$actividad->titulo}}</h1>
<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/'.$actividad->portada)}}" 
                         alt="{{$actividad->titulo}}" 
                         class="img-fluid portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">{{$actividad->descripcion_actividad}}</p>           
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                </div>
                <div class="row container mx-auto pt-3">
                    @foreach($imagenes as $imagen)
                    <div class="col-12 col-md-3">
                        <a href="{{asset('images/'.$imagen->img)}}"> 
                            <img class="img-fluid" src="{{asset('images/'.$imagen->img)}}" 
                                 alt="{{$imagen->img}}">
                        </a>  
                    </div>
                    @endforeach
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                </div>
                <div class="row container mx-auto">
                    @foreach($comentarios as $comentario)
                    <div class="col-12">
                        <i class="fas fa-user verde"></i> {{$comentario->autor}}
                        &nbsp;&nbsp;{{$comentario->fecha_comentario}} 
                    </div>
                    <p>{{$comentario->comentario}}</p>
                </div>
                @endforeach
            </div>
        </article>
    </div>
    <div class="col-lg-12 d-flex justify-content-end mt-4">
        <a href="{{route('poblacion.show',$actividad->poblacion_id)}}"
           class="btn btn-verde">Volver a población</a>
    </div>
</div>
@endsection
