<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta; // Asegúrate de que este uso sea correcto
use App\Models\User; // Asegúrate de que este uso sea correcto
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function email()
    {
        
        return view('auth.passwords.nueva-vista');

    }

    public function validateEmail(Request $request)
    {
        $email = $request->email;
        $response = User::where('email',$email)->get();
        if(count($response) > 0){
        
        
            $userInfo = $response[0];
            return view('auth.passwords.segunda-vista', compact('userInfo'));

        }else{

            return redirect()->route('login');


        }
    }

    public function validateSegundaVista(Request $request)
    {
        $email = $request->email;
        $security_answer = $request->security_answer;
        $response = User::where('email',$email)->get();
        if(count($response) > 0){
            if(trim($response[0]->security_answer) === trim($security_answer)){
                $userInfo = $response[0];

                return view('auth.passwords.tercera-vista', compact('userInfo'));

            }else{
                
                return redirect()->route('login');

            }
            
        }else{
            
            return redirect()->route('login');


        }
    }

    public function validateTerceraVista(Request $request)
    {
        $email = $request->email;
        $password = Hash::make($request->password);

        User::where('email',$email)
            ->update(['password' => $password]);

        $credentials = $request->only('email', 'password');

        // dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home');
        }
    
       
    }


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
