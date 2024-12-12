
@extends('layouts.app')
    @section('content')
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="welcome-card rounded text-white">
                        <div class="card-body p-md-5 mx-md-10 text-center">
                        
                            <h4 class="mt-4 mb-4 pb-1">¡Bienvenido al Directorio Telefónico!</h4>
                            @auth
                                <p class="lead">Hola {{ Auth::user()->name }}, estás autenticado.</p>
                                <a href="{{ route('home') }}" class="btn btn-primary">Ir a Inicio</a>
                            @else
                            <p class="lead">Por favor, inicia sesión para continuar.</p>
<br>
<a href="{{ route('login') }}" class="btn btn-outline-danger">Iniciar Sesión</a>
                                @if (Route::has('register'))
    <p class="mt-3">¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-turquoise">Regístrate aquí</a></p>
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