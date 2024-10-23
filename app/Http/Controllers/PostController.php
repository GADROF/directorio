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
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $search = $request->get('search');
        $query = Post::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('direccion_mac', 'LIKE', "%{$search}%")
                  ->orWhere('bienes_id_cliente', 'LIKE', "%{$search}%")
                  ->orWhere('marca_descripcion', 'LIKE', "%{$search}%")
                  ->orWhere('modelo_nombre_host', 'LIKE', "%{$search}%")
                  ->orWhere('ip', 'LIKE', "%{$search}%")
                  ->orWhere('puerta_de_enlace', 'LIKE', "%{$search}%")
                  ->orWhere('ext', 'LIKE', "%{$search}%")
                  ->orWhere('discado_direct', 'LIKE', "%{$search}%")
                  ->orWhere('direccion', 'LIKE', "%{$search}%")
                  ->orWhere('ubicacion', 'LIKE', "%{$search}%")
                  ->orWhere('rango_ext_piso', 'LIKE', "%{$search}%")
                  ->orWhere('piso', 'LIKE', "%{$search}%");
            });
        }

        $posts = $query->paginate();

        return view('post.index', compact('posts', 'search'))
            ->with('i', ($request->input('page', 1) - 1) * $posts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $post = new Post();
        return view('post.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request): RedirectResponse
    {
        Post::create($request->validated());
        return Redirect::route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->validated());
        return Redirect::route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index')
            ->with('deleted', 'Post deleted successfully');
    }
}