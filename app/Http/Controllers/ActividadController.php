<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Actividad as Actividad;
use App\Poblacion as Poblacion;

class ActividadController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('actividad.index');
    }

    /**
     * Mostramos todas las actividades 
     * en la categoría de Patrimonio
     * @return type
     */
    public function patrimonio() {
        $actividades = Actividad::all();
        $user = Auth::user();
        if (is_null($user)) {
            return view('actividad.patrimonio', compact('actividades'));
        }
        if ($user->colaborador == 0) {
            return view('actividad.patrimonio', compact('actividades'));
        } else {
            return view('actividad.patrimonio_col', compact('actividades'));
        }
    }

    /**
     * Mostramos todas las actividades 
     * en la categoría de Patrimonio
     * @return type
     */
    public function naturaleza() {
        $actividades = Actividad::all();
        $user = Auth::user();
        if (is_null($user)) {
            return view('actividad.naturaleza', compact('actividades'));
        }
        if ($user->colaborador == 0) {
            return view('actividad.naturaleza', compact('actividades'));
        } else {
            return view('actividad.naturaleza_col', compact('actividades'));
        }
    }

    /**
     * Mostramos todas las actividades 
     * en la categoría de Patrimonio
     * @return type
     */
    public function ocio() {
        $actividades = Actividad::all();
        $user = Auth::user();
        if (is_null($user)) {
            return view('actividad.ocio', compact('actividades'));
        }
        if ($user->colaborador == 0) {
            return view('actividad.ocio', compact('actividades'));
        } else {
            return view('actividad.ocio_col', compact('actividades'));
        }
    }

    /**
     * Mostramos todas las actividades 
     * en la categoría de Patrimonio
     * @return type
     */
    public function tradicion() {
        $actividades = Actividad::all();
        $user = Auth::user();
        if (is_null($user)) {
            return view('actividad.tradicion', compact('actividades'));
        }
        if ($user->colaborador == 0) {
            return view('actividad.tradicion', compact('actividades'));
        } else {
            return view('actividad.tradicion_col', compact('actividades'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $user = Auth::user();
        $poblaciones = Poblacion::all();
        return view('actividad.create', compact('user', 'poblaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Leemos los datos del formulario
        $datos = $request->all();
        // Guardamos el nombre de la ruta a la imagen en la carpeta 'images'
        $portada = $request->file('portada');
        if (isset($portada)) {
            $nombre = $portada->getClientOriginalName();
            $portada->move('images', $nombre);
            $datos['portada'] = $nombre;
        }
        // Creamos una nueva actividad
        $actividad = new Actividad($datos);
        // Guardamos en la BD        
        $actividad->save();
        // Mensaje de informacion al usuario
        if ($actividad) {
            return redirect('poblacion/' . $datos['poblacion_id'])->with('success', 'Actividad añadida con éxito.');
        } else {
            return redirect('poblacion/' . $datos['poblacion_id'])->with('error', 'No se ha podido añadir la actividad.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //Mostramos una población concreta con sus actividades
        $actividad = Actividad::find($id);
        $imagenes = Actividad::find($id)->imagenes;
        $comentarios = Actividad::find($id)->comentarios;
        $user = Auth::user();

        if (is_null($user)) {
            return view('actividad.actividad', compact('actividad', 'imagenes',
                            'comentarios'));
        }
        if ($user->colaborador == 0) {
            return view('actividad.actividad_reg', compact('actividad', 'imagenes',
                            'comentarios', 'user'));
        } else {
            return view('actividad.actividad_col', compact('actividad', 'imagenes',
                            'comentarios', 'user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $actividad = Actividad::find($id);
        $poblaciones = Poblacion::all();
        $user = Auth::user();
        return view('actividad.edit', compact('actividad', 'user','poblaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $actividad = Actividad::findOrFail($id);
        $actividad->update($request->all());
        if($actividad){
            return redirect('actividad/'.$actividad->id_actividad)->with('success', 'Actividad editada con éxito.');
        }else{
            return redirect('actividad/'.$actividad->id_actividad)->with('error', 'Error editando la actividad.');
        }
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
    }

}
