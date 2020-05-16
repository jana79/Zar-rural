<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Actividad as Actividad;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
       
        $actividades = Actividad::all();
        $contador = 3;
        $user = Auth::user();
        
        if ($user->id_user == 1) {
            return redirect('admin');
        } else {
            return view('home', compact('actividades', 'contador'));
        }
        
    }

}
