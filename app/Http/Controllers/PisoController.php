<?php

namespace App\Http\Controllers;

use App\Models\Piso;
use Illuminate\Http\Request;

class PisoController extends Controller
{
    public function index()
    {
        $pisos = Piso::all();
        return view('pisos.index', compact('pisos'));
    }

    public function create()
    {
        return view('pisos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        Piso::create($validatedData);
        return redirect()->route('pisos.index')->with('success', 'Piso creado exitosamente.');
    }

    public function show(Piso $piso)
    {
        return view('pisos.show', compact('piso'));
    }

    public function edit(Piso $piso)
    {
        return view('pisos.edit', compact('piso'));
    }

    public function update(Request $request, Piso $piso)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $piso->update($validatedData);
        return redirect()->route('pisos.index')->with('success', 'Piso actualizado exitosamente.');
    }

    public function destroy(Piso $piso)
    {
        $piso->delete();
        return redirect()->route('pisos.index')->with('success', 'Piso eliminado exitosamente.');
    }
}