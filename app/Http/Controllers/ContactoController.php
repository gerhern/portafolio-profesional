<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactoRequest;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index(){
        $mensajes = Contacto::all();
        return view('contacto.index', ['mensajes' => $mensajes]);
    }

    public function store(ContactoRequest $request){

        Contacto::create([
            'nombre' => $request->nombre,
            'asunto' => $request->asunto,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
         ]);

        return back()->with('success', 'Tu mensaje ha sido enviado correctamente');
    }

    public function show($id){
        $mensaje = Contacto::find($id);
        return view('contacto.show', ['mensaje' => $mensaje]);
    }

    public function destroy($id){
        $mensaje = Contacto::find($id);
        $mensaje->delete();
        return redirect()->route('contacto')->with('success', 'El mensaje ha sido eliminado correctamente');
    }
}
