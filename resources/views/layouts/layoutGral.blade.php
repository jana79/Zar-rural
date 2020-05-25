<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zar~rural</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Iconos -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
              integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" 
              crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <!-- ReCaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>
    <body>
        <!-- Cabecera -->
        <div class="cabecera w-100 p-3 d-flex justify-content-between">
            @yield("cabecera")

            <a href="{{ url('/') }}">
                <img class="logotipo ml-2" src="{{asset('images/logo-zarural.png')}}">
            </a>
            <div>
                @guest

                <a class="btn btn-verde mr-2" href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))

                <a class="btn btn-verde mr-2" href="{{ route('register') }}">{{ __('Registro') }}</a>

                @endif
                @else
                @switch(true)

                @case(Auth::user()->bloqueado == 1)
                {{Auth::logout()}}
                @break

                @case(Auth::user()->bloqueado == 0)
                <i class="fas fa-user verde"></i> <span class="verde mr-4">{{ Auth::user()->name }} </span>

                <a class="btn btn-verde mr-2" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                @break
                @endswitch
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest

    </div>
</div>

<!-- Menú de navegación -->
<section>
    @yield("menu")
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav container d-flex justify-content-between">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/poblacion')}}">Poblaciones</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/actividad')}}">Actividades</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/colabora')}}">Colabora</a>
                </li>       
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/contacta')}}">Contacta</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!-- Imagen fija con campo search -->
<section>
    @yield("imagenBuscar")
    <div class="portada">
        <div class="row h-100 m-0 overlay">
            <div class="col-12 my-auto">
                <h3 class="text-center text-light">¡Encuentra planes interesantes!</h3>
                <form class="form-inline  justify-content-center">
                    <input class="form-control mr-sm-2"
                            name="buscar" type="search" placeholder="Borja">
                    <button class=" btn btn-verde" type="submit">Buscar</button>
                </form>
            </div>     				
        </div>
    </div>
</section>
<!-- Contenido -->
<section class="container mx-auto">
  
    @yield("infoGeneral")
    

</section>
<!-- Footer -->
<section class="footer">
    @yield("footer")
    <div class="container">
        <p>Todos los derechos reservados. Mayo 2020</p>
    </div>            
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<!--jQuery Validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>


