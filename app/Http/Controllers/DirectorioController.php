<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectorioController extends Controller
{
    public function create()
    {
        return view('directorio.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bienes_id_cliente' => 'required',
            'direccion' => 'required',
            'direccion_mac' => 'required',
            'piso' => 'required',
            'ext' => 'required',
            'marca_descripcion' => 'required',
            'modelo_nombre_host' => 'required',
            'puerto_enlace' => 'required',
        ]);

        $directorio = new Directorio($request->all());
        $directorio->save();

        return redirect()->route('directorio.crear')->with('success', 'Directorio registrado exitosamente.');
    }
}