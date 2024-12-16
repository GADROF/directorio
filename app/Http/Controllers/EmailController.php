<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta; // Asegúrate de que este uso sea correcto
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function index()
    {
        $preguntas = pregunta::all();
        return view('auth.passwords.email', ['preguntas' => $preguntas]);
    }

    public function store(PostRequest $request): RedirectResponse
    {

        dd('hila');

    }
}
