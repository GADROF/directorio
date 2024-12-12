<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    public function index()
    {
        $ubicaciones = Ubicacion::all();
        return view('ubicaciones.index', compact('ubicaciones'));
    }

    public function create()
    {
        return view('ubicaciones.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        Ubicacion::create($validatedData);
        return redirect()->route('ubicaciones.index')->with('success', 'Ubicación creada exitosamente.');
    }

    public function show(Ubicacion $ubicacion)
    {
        return view('ubicaciones.show', compact('ubicacion'));
    }

    public function edit(Ubicacion $ubicacion)
    {
        return view('ubicaciones.edit', compact('ubicacion'));
    }

    public function update(Request $request, Ubicacion $ubicacion)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $ubicacion->update($validatedData);
        return redirect()->route('ubicaciones.index')->with('success', 'Ubicación actualizada exitosamente.');
    }

    public function destroy(Ubicacion $ubicacion)
    {
        $ubicacion->delete();
        return redirect()->route('ubicaciones.index')->with('success', 'Ubicación eliminada exitosamente.');
    }
}