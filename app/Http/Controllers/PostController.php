<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'direccion_mac' => 'required',
            'serial' => 'required',
            'bienes_id_cliente' => 'required',
            'ext' => 'required',
            'ip' => 'required',
            'puerta_de_enlace' => 'required',
            'marca_descripcion' => 'nullable|exists:marca_descripciones,id',
            'modelo_nombre_host' => 'nullable',
            'discado_direct' => 'nullable',
            'direccion_id' => 'nullable|exists:direcciones,id',
            'ubicacion_id' => 'nullable|exists:ubicaciones,id',
            'piso_id' => 'nullable|exists:pisos,id',
            'status' => 'required',
        ]);

        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'direccion_mac' => 'required',
            'serial' => 'required',
            'bienes_id_cliente' => 'required',
            'ext' => 'required',
            'ip' => 'required',
            'puerta_de_enlace' => 'required',
            'marca_descripcion' => 'nullable|exists:marca_descripciones,id',
            'modelo_nombre_host' => 'nullable',
            'discado_direct' => 'nullable',
            'direccion_id' => 'nullable|exists:direcciones,id',
            'ubicacion_id' => 'nullable|exists:ubicaciones,id',
            'piso_id' => 'nullable|exists:pisos,id',
            'status' => 'required',
        ]);

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
    }
}