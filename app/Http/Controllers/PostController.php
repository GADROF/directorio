<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->get('search');
        $query = Post::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('direccion_mac', 'LIKE', "%{$search}%")
                  ->orWhere('serial', 'LIKE', "%{$search}%")
                  ->orWhere('bienes_id_cliente', 'LIKE', "%{$search}%")
                  ->orWhere('ext', 'LIKE', "%{$search}%")
                  ->orWhere('ip', 'LIKE', "%{$search}%")
                  ->orWhere('puerta_de_enlace', 'LIKE', "%{$search}%")
                  ->orWhere('marca_descripcion', 'LIKE', "%{$search}%")
                  ->orWhere('modelo_nombre_host', 'LIKE', "%{$search}%")
                  ->orWhere('discado_direct', 'LIKE', "%{$search}%")
                  ->orWhere('direccion', 'LIKE', "%{$search}%")
                  ->orWhere('ubicacion', 'LIKE', "%{$search}%")
                  ->orWhere('piso', 'LIKE', "%{$search}%")
                  ->orWhere('status', 'LIKE', "%{$search}%");
            });
        }

        $posts = $query->paginate();

        return view('post.index', compact('posts', 'search'))
            ->with('i', ($request->input('page', 1) - 1) * $posts->perPage());
    }

    public function create(): View
    {
        $post = new Post();
        return view('post.create', compact('post'));
    }

    public function store(PostRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        
        // Eliminar campos vacíos para campos opcionales
        $validatedData = array_filter($validatedData, function($value) {
            return $value !== null && $value !== '';
        });

        Post::create($validatedData);
        return Redirect::route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function show($id): View
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function edit($id): View
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        $validatedData = $request->validated();
        
        // Eliminar campos vacíos para campos opcionales
        $validatedData = array_filter($validatedData, function($value) {
            return $value !== null && $value !== '';
        });

        $post->update($validatedData);
        return Redirect::route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')
            ->with('deleted', 'Post deleted successfully');
    }
}