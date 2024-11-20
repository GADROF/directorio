<?php

namespace App\Http\Controllers;

use App\Models\MarcaDescripcion;
use App\Models\Post;
use App\Models\Direccion;
use App\Models\Ubicacion;
use App\Models\Piso;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->get('search');
        $query = Post::with(['direccion', 'ubicacion', 'piso', 'marcaDescripcion']);
    
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('direccion_mac', 'LIKE', "%{$search}%")
                  ->orWhere('serial', 'LIKE', "%{$search}%")
                  ->orWhere('bienes_id_cliente', 'LIKE', "%{$search}%")
                  ->orWhere('ext', 'LIKE', "%{$search}%")
                  ->orWhere('ip', 'LIKE', "%{$search}%")
                  ->orWhere('puerta_de_enlace', 'LIKE', "%{$search}%")
                  ->orWhere('modelo_nombre_host', 'LIKE', "%{$search}%")
                  ->orWhere('discado_direct', 'LIKE', "%{$search}%")
                  ->orWhere('status', 'LIKE', "%{$search}%")
                  ->orWhereHas('direccion', function($q) use ($search) {
                      $q->where('nombre', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('ubicacion', function($q) use ($search) {
                      $q->where('nombre', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('piso', function($q) use ($search) {
                      $q->where('nombre', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('marcaDescripcion', function($q) use ($search) {
                      $q->where('descripcion', 'LIKE', "%{$search}%");
                  });
            });
        }
    
        $posts = $query->paginate();
        // dd ( $query->get()[0]->direccion_id);
        return view('post.index', compact('posts', 'search'))
            ->with('i', ($request->input('page', 1) - 1) * $posts->perPage());
    }

    public function create(): View
    {
        $post = new Post();
        $direcciones = Direccion::all();
        $ubicaciones = Ubicacion::all();
        $pisos = Piso::all();
        $marcadescripciones = MarcaDescripcion::all();

        return view('post.create', compact('post', 'direcciones', 'ubicaciones', 'pisos', 'marcadescripciones'));
    }

    public function store(PostRequest $request): RedirectResponse
    {
        try {
            $validatedData = $request->validated();
            
            // Eliminar campos vacíos para campos opcionales
            $validatedData = array_filter($validatedData, function($value) {
                return $value !== null && $value !== '';
            });

            Log::info('Validated data for new post:', $validatedData);

            $post = Post::create($validatedData);
            
            Log::info('Post created successfully with ID: ' . $post->id);

            return Redirect::route('posts.index')
                ->with('success', 'Post created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating post: ' . $e->getMessage());
            
            return Redirect::back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while creating the post. Please try again.']);
        }
    }

    public function show($id): View
    {
        $post = Post::with(['direccion', 'ubicacion', 'piso', 'marcaDescripcion'])->findOrFail($id);
        
        return view('post.show', compact('post'));
    }

    public function edit($id): View
    {
        $post = Post::findOrFail($id);
        $direcciones = Direccion::all();
        $ubicaciones = Ubicacion::all();
        $pisos = Piso::all();
        $marcadescripciones = MarcaDescripcion::all();

        return view('post.edit', compact('post', 'direcciones', 'ubicaciones', 'pisos', 'marcadescripciones'));
    }

    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        try {
            $validatedData = $request->validated();
            
            // Eliminar campos vacíos para campos opcionales
            $validatedData = array_filter($validatedData, function($value) {
                return $value !== null && $value !== '';
            });

            Log::info('Validated data for updating post:', $validatedData);

            $post->update($validatedData);

            Log::info('Post updated successfully with ID: ' . $post->id);

            return Redirect::route('posts.index')
                ->with('success', 'Post updated successfully');
        } catch (\Exception $e) {
            Log::error('Error updating post: ' . $e->getMessage());
            
            return Redirect::back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while updating the post. Please try again.']);
        }
    }

    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();

            Log::info('Post deleted successfully with ID: ' . $id);

            return redirect()->route('posts.index')
                ->with('success', 'Post deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting post: ' . $e->getMessage());
            
            return redirect()->route('posts.index')
                ->with('error', 'An error occurred while deleting the post. Please try again.');
        }
    }
}