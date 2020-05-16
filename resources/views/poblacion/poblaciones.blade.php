@extends("layouts.layoutGral")


@section("infoGeneral")

<h1>Bienvenido a la sección Poblaciones</h1>
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
<p class="text-center">Aquí encontrarás las poblaciones de la provincia de Zaragoza ordenadas alfabéticamente.
    Haz clic sobre el nombre para ver la población y las actividades que ofrece.</p>

<div class="container mt-5 mb-5 shadow col-md-12 p-5">
    <div class="row">
        <div class="col-lg-12">
            <ul id="poblaciones" class="row">
                @foreach($poblaciones as $poblacion)

                <li class="col-12 sep">
                    <span>
                        {{$poblacion->nombre_poblacion[0]}}
                    </span></li>
                <li class="col-12 col-md-6 col-lg-4">
                    <a href="{{route('poblacion.show',$poblacion->id_poblacion)}}">
                        {{$poblacion->nombre_poblacion}}</a></li>

                @endforeach             

            </ul>
        </div>
    </div>
</div>

@endsection

