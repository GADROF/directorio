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
        $request->validate([
            'mac_address' => 'required',
            'client_id' => 'required',
            'brand_description' => 'required',
            'model_hostname' => 'required',
            'ip' => 'required|ip',
            'gateway' => 'required|ip',
            'address' => 'required',
            'location' => 'required',
            'floor' => 'required',
            // Añade más reglas de validación según sea necesario
        ]);
    
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Registro creado exitosamente.');
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
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
    }
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('mac_address');
            $table->string('client_id');
            $table->string('brand_description');
            $table->string('model_hostname');
            $table->ipAddress('ip');
            $table->ipAddress('gateway');
            $table->string('ext')->nullable();
            $table->string('direct_dialing')->nullable();
            $table->string('address');
            $table->string('location');
            $table->string('ext_range')->nullable();
            $table->string('floor');
            $table->timestamps();
        });
    }
    
}