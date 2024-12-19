<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundaVistaController extends Controller
{
    public function showSegundaVista()
    {
        return view('auth.passwords.segunda-vista');
    }
}