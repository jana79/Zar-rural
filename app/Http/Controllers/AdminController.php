<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home_admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create() {
//        return view('poblacion.create');
//    }

    public function listado() {
        $usuarios = User::paginate(5);
        return view('listado', compact('usuarios'));
    }

    public function contenido($id) {
        $usuario = User::findOrFail($id);
        $actividades = $usuario->actividades;
        $comentarios = $usuario->comentarios;
        return view('contenido', compact('usuario', 'actividades',
                        'comentarios'));
    }

    public function bloqueado($id) {
        User::where("bloqueado", 0)->where("id_user", $id)->update(["bloqueado" => 1]);
        $usuario = User::findOrFail($id);
        if ($usuario) {
            return redirect('admin/listadoUsuarios')->with('success', 'Usuario bloqueado con éxito.');
        } else {
            return redirect('admin/listadoUsuarios')->with('error', 'Error bloqueando al usuario.');
        }
    }
    
    public function desbloqueado($id) {
        User::where("bloqueado", 1)->where("id_user", $id)->update(["bloqueado" => 0]);
        $usuario = User::findOrFail($id);
        if ($usuario) {
            return redirect('admin/listadoUsuarios')->with('success', 'Usuario desbloqueado con éxito.');
        } else {
            return redirect('admin/listadoUsuarios')->with('error', 'Error desbloqueando al usuario.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
