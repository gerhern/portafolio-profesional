<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProyectoRequest;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Storage;

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

        $imagen = $request->file('url_imagen');
        $nombreImagen = $request->nombre. '.'. $imagen->getClientOriginalExtension();
        $nombreImagen = str_replace(' ', '_', $nombreImagen);

        Storage::disk('proyecto')->putFileAs('/', $imagen, $nombreImagen);

        Proyecto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'descripcion_corta' => $request->descripcion_corta,
            'url_imagen' => $nombreImagen,
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
        ]);

        if($request->hasFile('url_imagen')){
            Storage::disk('proyecto')->delete($proyecto->url_imagen);

            $imagen = $request->file('url_imagen');
            Storage::disk('proyecto')->putFileAs('/', $imagen, $proyecto->url_imagen);
        }

        return redirect()->route('proyectos')->with('success', 'Proyecto actualizado exitosamente');
    }

    public function destroy($id){
        $proyecto = Proyecto::find($id);

        Storage::disk('proyecto')->delete("$proyecto->url_imagen");

        $proyecto->delete();

        return redirect()->route('proyectos')->with('success', 'Proyecto eliminado exitosamente');
    }
}
