<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Actividad as Actividad;
use App\Poblacion as Poblacion;


class ActividadesController extends Controller {

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = Auth::user();
        if(is_null($user)){
            return view('actividades.index');
        }
        if($user->colaborador == 0 || !isset($user)){
             return view('actividades.index');
        }else{
            return view('actividades.index_col');
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $user = Auth::user();
        $poblaciones=Poblacion::all();
        return view('actividades.create', compact('user', 'poblaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //leemos los datos del formulario
        $datos=$request->all();
        $portada = $request->file('portada');
        if(isset($portada)){
            $nombre=$portada->getClientOriginalName();
            $portada->move('images', $nombre);
            $datos['portada']=$nombre;
        }
        //creamos una nueva actividad
        $actividad = new Actividad($datos);
        //Guardamos en la BD
        
        $actividad->save();
        // mensaje de informacion al usuario
        if($actividad){
            return redirect('actividades')->with('success', 'Actividad añadida con éxito.');
        }else{
            return redirect('actividades')->with('error', 'No se ha podido añadir la actividad.');
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
        $actividad= Actividad::find($id);
        $user = Auth::user();
        
        if($user->colaborador == 0 ||is_null($user)){
             return view('actividades.actividad',compact('actividad'));
        }else{
            return view('actividades.actividad_col',compact('actividad'));
        }
    
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
        return view('actividad.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        return view('actividad.delete');
    }

}
