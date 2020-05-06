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
<div class="row container mx-auto pt-3">
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 pt-3  text-center verde">Ecce Homo</h4>
        <img class="img-fluid" src="{{asset('images/ecceHomo.jpg')}}" alt="EcceHomo">
        <p class="pt-4">En agosto de 2012, una vecina de Borja, Cecilia Giménez, situó al 
            municipio zaragozano de Borja en el mapa mundial gracias a su 
            singular restauración del Ecce Homo, una pintura mural de principios 
            del siglo XX obra del artista aragonés Elías García Martínez y 
            ubicada en el Santuario de Misericordia.</p>
        <div class="d-flex justify-content-center py-3">
            <a href="http://localhost:8000/poblaciones/borja/ecceHomo" class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 pt-3  text-center verde">Monasterio de Piedra</h4>
        <img class="img-fluid" src="{{asset('images/monPiedra.jpg')}}" alt="Monasterio de Piedra">
        <p class="pt-4">En la localidad de Nuévalos, a escasos kilómetros de Calatayud, 
                    se emplaza el famoso Monasterio de Piedra, un antiguo cenobio 
                    cisterciense ubicado en un hermoso parque natural repleto de 
                    cascadas, bellísimos saltos de agua y grutas. Se trata de uno 
                    de los parajes más bellos y visitados de Aragón.</p>
        <div class="d-flex justify-content-center py-3">
            <a href="http://localhost:8000/poblaciones/nuevalos/monPiedra" class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 pt-3 text-center verde">La Contradanza</h4>  
        <img class="img-fluid" src="{{asset('images/contradanza.jpg')}}" alt="Contradanza">
        <p class="pt-4">La Contradanza de Cetina es una expresión espectacular 
            única, que se representa en Cetina la noche del 19 de Mayo en honor 
            de San Juan Lorenzo. El personaje llamado “el diablo” es el que dirige 
            el baile con sus palmadas y órdenes para dar comienzo a las mudanzas,
            realizadas por los otros ocho "contradanceros".</p>
        <div class="d-flex justify-content-center py-3">
            <a href="http://localhost:8000/poblaciones/cetina/contradanza" class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
</div>

@endsection

