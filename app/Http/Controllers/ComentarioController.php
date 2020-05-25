<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Actividad as Actividad;
use App\Comentario as Comentario;

class ComentarioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        //
    }

    public function add($id) {
        $user = Auth::user();
        $actividad = Actividad::find($id);
        return view('comentario.create', compact('user', 'actividad'));
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
        // Creamos un nuevo comentario
        $comentario = new Comentario($datos);
        // Guardamos en la BD        
        $comentario->save();
        // Mensaje de informacion al usuario
        if ($comentario) {
            return redirect('actividad/' . $datos['actividad_id'])->with('success', 'Comentario añadido con éxito.');
        } else {
            return redirect('actividad/' . $datos['actividad_id'])->with('error', 'No se ha podido añadir el comentario.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $comentario = Comentario::findOrFail($id);
        $actividad = $comentario->actividad_id;
        $user = Auth::user();
        return view('comentario.edit', compact('comentario', 'user','actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $comentario = Comentario::findOrFail($id);
        $comentario->update($request->all());
        if ($comentario) {
            return redirect('actividad/'. $comentario->actividad_id)->with('success', 'Comentario editado con éxito.');
        } else {
            return redirect('actividad/'. $comentario->actividad_id)->with('error', 'Error editando el comentario.');
        }
    }

    public function eliminar($id) {
        $comentario = Comentario::findOrFail($id);
        return view('comentario.delete', compact('comentario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();
        if (!isset($comentario)) {
            return redirect('actividad/'. $comentario->actividad_id)->with('error', 'Error eliminando el comentario.');
        } else {
            return redirect('actividad/'. $comentario->actividad_id)->with('success', 'Comentario eliminado con éxito.');
        }
    }

}
