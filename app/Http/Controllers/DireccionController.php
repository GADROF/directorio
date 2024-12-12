<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function index()
    {
        $direcciones = Direccion::all();
        return view('direcciones.index', compact('direcciones'));
    }

    public function create()
    {
        return view('direcciones.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        Direccion::create($validatedData);
        return redirect()->route('direcciones.index')->with('success', 'Dirección creada exitosamente.');
    }

    public function show(Direccion $direccion)
    {
        return view('direcciones.show', compact('direccion'));
    }

    public function edit(Direccion $direccion)
    {
        return view('direcciones.edit', compact('direccion'));
    }

    public function update(Request $request, Direccion $direccion)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $direccion->update($validatedData);
        return redirect()->route('direcciones.index')->with('success', 'Dirección actualizada exitosamente.');
    }

    public function destroy(Direccion $direccion)
    {
        $direccion->delete();
        return redirect()->route('direcciones.index')->with('success', 'Dirección eliminada exitosamente.');
    }
}