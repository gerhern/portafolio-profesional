<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProyectoRequest;
use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{

    public function index(){
        $proyectos = Proyecto::all();
        return view('proyectos.index', [
            'proyectos' => $proyectos
        ]);
    }

    public function create(){
        return view('proyectos.create');
    }

    public function store(ProyectoRequest $request){

        Proyecto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'descripcion_corta' => $request->descripcion_corta,
            'url_imagen' => $request->url_imagen,
        ]);

        return redirect()->route('proyectos')->with('success', 'Proyecto creado exitosamente');
    }

    public function edit($id){
        $proyecto = Proyecto::find($id);
        return view('proyectos.edit', [
            'proyecto' => $proyecto
        ]);
    }

    public function update(ProyectoRequest $request, $id){
        $proyecto = Proyecto::find($id);
        $proyecto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'descripcion_corta' => $request->descripcion_corta,
            'url_imagen' => $request->url_imagen,
        ]);

        return redirect()->route('proyectos')->with('success', 'Proyecto actualizado exitosamente');
    }

    public function destroy($id){
        $proyecto = Proyecto::find($id);
        $proyecto->delete();

        return redirect()->route('proyectos')->with('success', 'Proyecto eliminado exitosamente');
    }
}
