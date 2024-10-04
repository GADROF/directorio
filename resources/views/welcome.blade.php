<!doctype html>
<html lang="en">
<head>
    <title>Bienvenido a Laravel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('build/assets/estilos.css')}}">
    <style>
        body {
            background-image: url('build/assets/j.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
        }
        .welcome-card {
            background-color: rgba(255, 255, 255, 0.85);
            max-width: 600px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-outline-danger {
            color: #dc3545;
            background-color: #ffffff;
            border-color: #dc3545;
        }
        .btn-outline-danger:hover {
            color: #ffffff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="welcome-card rounded text-black">
                        <div class="card-body p-md-5 mx-md-4 text-center">
                            <img src="build/assets/p.png" style="width: 300px;" alt="logo">
                            <h4 class="mt-4 mb-4 pb-1">¡Bienvenido a Laravel!</h4>
                            @auth
                                <p class="lead">Hola {{ Auth::user()->name }}, estás autenticado.</p>
                                <a href="{{ route('home') }}" class="btn btn-primary">Ir a Inicio</a>
                            @else
                                <p class="lead">Por favor, inicia sesión para continuar.</p>
                                
                                <a href="{{ route('login') }}" class="btn btn-outline-danger">Iniciar Sesión</a>

                                @if (Route::has('register'))
                                    <p class="mt-3">¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
                                @endif
                            @endauth
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>