<?php

namespace App\Http\Controllers;

use App\Models\Certificacion;
use App\Models\Contacto;
use App\Models\Habilidad;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){

        $proyectos = Proyecto::latest()->limit(3)->get();

        return view('guest.home', [
            'proyectos' => $proyectos,
        ]);
    }

    public function proyectos(){
        $proyectos = Proyecto::with('tecnologias')->get();
        $certificaciones = Certificacion::all();

        return view('guest.proyectos', [
            'proyectos' => $proyectos,
            'certificaciones' => $certificaciones
        ]);
    }

    public function contacto(){
        return view('guest.contacto');
    }

    public function dashboard(){
        $countProyectos = Proyecto::count();
        $countCertificaciones = Certificacion::count();
        $countMensajes = Contacto::count();
        return view('dashboard', [
            'cantidadProyectos' => $countProyectos,
            'cantidadCertificaciones' => $countCertificaciones,
            'cantidadMensajes' => $countMensajes
        ]);
    }
}
