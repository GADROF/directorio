<?php

namespace App\Http\Controllers;

use App\Models\MarcaDescripcion;
use Illuminate\Http\Request;

class MarcaDescripcionController extends Controller
{
    public function index()
    {
        $marcaDescripciones = MarcaDescripcion::all();
        return view('marca_descripciones.index', compact('marcaDescripciones'));
    }

    public function create()
    {
        return view('marca_descripciones.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:255',
        ]);

        MarcaDescripcion::create($validatedData);
        return redirect()->route('marca_descripciones.index')->with('success', 'Marca descripción creada exitosamente.');
    }

    public function show(MarcaDescripcion $marcaDescripcion)
    {
        return view('marca_descripciones.show', compact('marcaDescripcion'));
    }

    public function edit(MarcaDescripcion $marcaDescripcion)
    {
        return view('marca_descripciones.edit', compact('marcaDescripcion'));
    }

    public function update(Request $request, MarcaDescripcion $marcaDescripcion)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:255',
        ]);

        $marcaDescripcion->update($validatedData);
        return redirect()->route('marca_descripciones.index')->with('success', 'Marca descripción actualizada exitosamente.');
    }

    public function destroy(MarcaDescripcion $marcaDescripcion)
    {
        $marcaDescripcion->delete();
        return redirect()->route('marca_descripciones.index')->with('success', 'Marca descripción eliminada exitosamente.');
    }
}