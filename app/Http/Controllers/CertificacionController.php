<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertificacionRequest;
use App\Models\Certificacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificacionController extends Controller
{
    public function index(){
        $certificaciones = Certificacion::all();
        return view('certificaciones.index', [
            'certificaciones' => $certificaciones
        ]);
    }

    public function create(){
        return view('certificaciones.create');
    }

    public function store(CertificacionRequest $request){

        $imagen = $request->file('url_imagen');
        $nombreImagen = $request->nombre. '.'. $imagen->getClientOriginalExtension();
        $nombreImagen = str_replace(' ', '_', $nombreImagen);

        Storage::disk('certificaciones')->putFileAs('/', $imagen, $nombreImagen);

        Certificacion::create([
            'nombre' => $request->nombre,
            'institucion' => $request->institucion,
            'fecha_emision' => $request->fecha_emision,
            'url_imagen' => $nombreImagen,
        ]);

        return redirect()->route('certificaciones')->with('success', 'Certificación agregada correctamente');
    }

    public function edit($id){
        $certificacion = Certificacion::find($id);

        return view('certificaciones.edit', [
            'certificacion' => $certificacion
        ]);
    }

    public function update(CertificacionRequest $request, $id){

        $certificacion = Certificacion::find($id);

        $certificacion->update([
            'nombre' => $request->nombre,
            'institucion' => $request->institucion,
            'fecha_emision' => $request->fecha_emision,
        ]);

        if($request->hasFile('url_imagen')){
            Storage::disk('certificaciones')->delete("$certificacion->url_imagen");

            $imagen = $request->file('url_imagen');
            Storage::disk('certificaciones')->putFileAs('/', $imagen, $certificacion->url_imagen);
        }
        return redirect()->route('certificaciones')->with('success', 'Certificación actualizada correctamente');
    }

    public function destroy($id){
        $certificacion = Certificacion::find($id);

        Storage::disk('certificaciones')->delete("$certificacion->url_imagen");

        $certificacion->delete();

        return redirect()->route('certificaciones')->with('success', 'Certificación eliminada correctamente');
    }
}
