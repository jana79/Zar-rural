<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Actividad as Actividad;
use App\Imagen as Imagen;

class ImagenController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    public function add($id) {
        $user = Auth::user();
        $actividad = Actividad::find($id);
        return view('imagen.create', compact('user', 'actividad'));
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
        $img = $request->file('img');
        if (isset($img)) {
            $nombre = $img->getClientOriginalName();
            $img->move('images', $nombre);
            $datos['img'] = $nombre;
        }
        // Creamos una nueva imagen
        $imagen = new Imagen($datos);
        // Guardamos en la BD        
        $imagen->save();
        // Mensaje de informacion al usuario
        if ($imagen) {
            return redirect('actividad/' . $datos['actividad_id'])->with('success', 'Imagen añadida con éxito.');
        } else {
            return redirect('actividad/' . $datos['actividad_id'])->with('error', 'No se ha podido añadir la imagen.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    public function eliminar($id) {
        $imagen = Imagen::findOrFail($id);
        return view('imagen.delete', compact('imagen'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $imagen = Imagen::findOrFail($id);
        $imagen->delete();
        if (!isset($imagen)) {
            return redirect('actividad/' . $imagen->actividad_id)->with('error', 'Error eliminando la imagen.');
        } else {
            return redirect('actividad/' . $imagen->actividad_id)->with('success', 'Imagen eliminada con éxito.');
        }
    }

}
