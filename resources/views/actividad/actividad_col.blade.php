@extends("layouts.layoutGral")

@section("infoGeneral")
<div class="container row justify-content-md-center">
    @if(session('success'))
    <div class="col-12 col-md-6">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    @if (session('error'))
    <div class="col-sm-12 col-md-6">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif

</div>
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

                <div>
                    <a href="{{route('actividad.edit', $actividad->id_actividad)}}" 
                       class="btn btn-verde ">Editar</a>
                    <a href="{{url('actividad/eliminar', $actividad->id_actividad)}}" 
                       class="btn btn-verde ">Eliminar</a>
                </div>                
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div class="my-auto">
                        <a href="{{url('imagen',$actividad->id_actividad)}}"
                           class="btn btn-verde">Añadir</a>
                    </div>
                </div>
                <div class="row container mx-auto pt-3">
                    @foreach($imagenes as $imagen)
                    <div class="col-12 col-md-3">
                        <a href="{{asset('images/'.$imagen->img)}}"> 
                            <img class="img-fluid" src="{{asset('images/'.$imagen->img)}}" 
                                 alt="{{$imagen->img}}">
                        </a> 
                        @if($imagen->user_id == $user->id_user)
                        <div>
                            <a href="{{url('imagen/eliminar', $imagen->id_img)}}" 
                               class="btn btn-verde mt-3">Eliminar</a>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div class="my-auto">
                        <a href="{{url('comentario',$actividad->id_actividad)}}"
                           class="btn btn-verde">Añadir</a>
                    </div>
                </div>
                <div class="row container mx-auto">
                    @foreach($comentarios as $comentario)
                    <div class="col-12">
                        <i class="fas fa-user verde"></i> {{$comentario->autor}}
                        &nbsp;&nbsp;{{$comentario->fecha_comentario}} 
                    </div>
                    <p>{{$comentario->comentario}}</p>
                </div>
                <div class="d-flex justify-content-end">
                    @if($comentario->autor == $user->name)
                    <div>
                        <a href="{{route('comentario.edit', $comentario->id_comentario)}}" 
                           class="btn btn-verde">Editar</a>
                        <a href="{{url('comentario/eliminar', $comentario->id_comentario)}}" 
                           class="btn btn-verde">Eliminar</a>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </article>
    </div>
    <div class="col-lg-12 d-flex justify-content-end mt-4">
        <a href="{{route('poblacion.show',$actividad->poblacion_id)}}"
           class="btn btn-verde ">Volver a población</a>
    </div>
</div>
@endsection
