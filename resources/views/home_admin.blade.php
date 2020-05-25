@extends("layouts.layoutGral")

@section("infoGeneral")
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
<div class="row container mx-auto pt-3 d-flex justify-content-center">
    <a href="{{url("admin/listadoUsuarios")}}" 
       class="btn btn-verde">
        Ver listado
    </a>
</div>

@endsection

