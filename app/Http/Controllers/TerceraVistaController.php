<?php

// app/Http/Controllers/TerceraVistaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerceraVistaController extends Controller
{
    public function showTerceraVista()
    {
        return view('auth.passwords.tercera-vista');
    }
}