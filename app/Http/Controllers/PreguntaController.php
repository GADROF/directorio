<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Mostrar una lista de preguntas.
     */
    public function index()
    {
        // Obtener todas las preguntas
        $preguntas = Pregunta::all();

        // Retornar una vista o respuesta JSON con las preguntas
        return view('preguntas.index', compact('preguntas')); // Para vistas
        // return response()->json($preguntas); // Para API
    }

    /**
     * Mostrar el formulario para crear una nueva pregunta.
     */
    public function create()
    {
        // Retornar una vista con el formulario para crear una pregunta
        return view('preguntas.create');
    }

    /**
     * Guardar una nueva pregunta en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar los datos enviados
        $request->validate([
            'pregunta' => 'required|string|max:255',
        ]);

        // Crear una nueva pregunta
        Pregunta::create($request->all());

        // Redirigir o retornar respuesta
        return redirect()->route('preguntas.index')->with('success', 'Pregunta creada exitosamente.');
    }

    /**
     * Mostrar los detalles de una pregunta específica.
     */
    public function show(Pregunta $pregunta)
    {
        // Retornar una vista con los detalles de la pregunta
        return view('preguntas.show', compact('pregunta'));
    }

    /**
     * Mostrar el formulario para editar una pregunta existente.
     */
    public function edit(Pregunta $pregunta)
    {
        // Retornar una vista con el formulario de edición
        return view('preguntas.edit', compact('pregunta'));
    }

    /**
     * Actualizar una pregunta existente en la base de datos.
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        // Validar los datos enviados
        $request->validate([
            'pregunta' => 'required|string|max:255',
        ]);

        // Actualizar la pregunta
        $pregunta->update($request->all());

        // Redirigir o retornar respuesta
        return redirect()->route('preguntas.index')->with('success', 'Pregunta actualizada exitosamente.');
    }

    /**
     * Eliminar una pregunta de la base de datos.
     */
    public function destroy(Pregunta $pregunta)
    {
        // Eliminar la pregunta
        $pregunta->delete();

        // Redirigir o retornar respuesta
        return redirect()->route('preguntas.index')->with('success', 'Pregunta eliminada exitosamente.');
    }
}