@extends("layouts.layoutGral")


@section("infoGeneral")
<h1>Listado de usuarios</h1>
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
<div class="container mt-5 mb-5 shadow col-12 pl-5 pr-5">					
    <table class="table">
        <thead class=" pt-3">
            <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Tipo</th>
                <th scope="col">Ver contenido</th>
                <th scope="col">BLOQUEAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <?php
            $tipo = "";
            if ($usuario->colaborador == 1) {
                $tipo = "Colaborador";
            } else {
                $tipo = "Registrado";
            }
            ?>  
            @if($usuario->id_user != 1)
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$tipo}}</td>
                <td>
                    <a href="{{url('admin/contenidoUsuarios', $usuario->id_user)}}" 
                       class="btn btn-verde">
                        Ver contenido
                    </a>
                </td>
                <td>
                    @if($usuario->bloqueado==1)
                    <a href="{{url('desbloqueado', $usuario->id_user)}}" class="btn btn-danger">
                        Bloqueado
                    </a>
                    @else
                    <a href="{{url('bloqueado', $usuario->id_user)}}" class="btn btn-verde">
                        Bloquear
                    </a>
                    @endif
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <div class="py-5 d-flex justify-content-center">
        {{ $usuarios->links() }}
    </div>
</div>	     

@endsection