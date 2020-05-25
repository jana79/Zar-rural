<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Poblacion as Poblacion;

class PoblacionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // Mostramos el listado de poblaciones de la base de datos
        $poblaciones = Poblacion::all()->sortBy('nombre_poblacion');
        $letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'L', 'M', 'N', 'O',
            'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'Z'];
        return view('poblacion.poblaciones', compact('poblaciones', 'letras'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('poblacion.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //Mostramos una población concreta con sus actividades
        $actividades = Poblacion::find($id)->actividades;
        $id_poblacion = Poblacion::find($id)->id_poblacion;
        $nombre_poblacion = Poblacion::find($id)->nombre_poblacion;
        $descripcion_poblacion = Poblacion::find($id)->descripcion_poblacion;
        $imagen_poblacion = Poblacion::find($id)->imagen_poblacion;

        $user = Auth::user();

        if (is_null($user)) {
            return view('poblacion.poblacion', compact('actividades',
                            'id_poblacion', 'nombre_poblacion', 'descripcion_poblacion',
                            'imagen_poblacion'));
        }

        if ($user->colaborador == 0 || $user->bloqueado == 1) {
            return view('poblacion.poblacion', compact('actividades',
                            'id_poblacion', 'nombre_poblacion', 'descripcion_poblacion',
                            'imagen_poblacion'));
        } else {
            return view('poblacion.poblacion_col', compact('actividades',
                            'id_poblacion', 'nombre_poblacion', 'descripcion_poblacion',
                            'imagen_poblacion'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //leemos los datos del formulario
        $datos = $request->all();
        $imagen = $request->file('imagen_poblacion');
        if (isset($imagen)) {
            $nombre = $imagen->getClientOriginalName();
            $imagen->move('images', $nombre);
            $datos['imagen_poblacion'] = $nombre;
        }
        //creamos una nueva actividad
        $poblacion = new Poblacion($datos);
        //Guardamos en la base de 
        $poblacion->save();
        // mensaje de informacion al usuario
        if ($poblacion) {
            return redirect('poblacion')->with('success', 'Poblacion añadida con éxito.');
        } else {
            return redirect('poblacion')->with('error', 'No se ha podido añadir la población.');
        }
    }

}
