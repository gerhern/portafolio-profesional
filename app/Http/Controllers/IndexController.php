<?php

namespace App\Http\Controllers;

use App\Models\Habilidad;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){

        $proyectos = Proyecto::latest()->limit(3)->get();

        return view('home', [
            'proyectos' => $proyectos,
        ]);
    }

    public function proyectos(){
        $proyectos = Proyecto::with('tecnologias')->get();

        return view('guest.proyectos', [
            'proyectos' => $proyectos,
            'certificaciones' => []
        ]);
    }

    public function dashboard(){
        $countProyectos = Proyecto::count();
        return view('dashboard', [
            'cantidadProyectos' => $countProyectos
        ]);
    }
}
