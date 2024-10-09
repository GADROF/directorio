@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Notificación de inicio de sesión -->
    <div id="loginNotification" class="text-center mb-4">
        <div class="alert alert-success d-inline-block">
            <strong>¡Bienvenido!</strong> Has iniciado sesión correctamente.
        </div>
    </div>

    <div class="row justify-content-center mt-5"> <!-- Agregado mt-5 para aumentar el margen superior -->
        <!-- Tarjeta de menú de opciones -->
        <div class="col-md-5">
            <div class="card bg-semi-transparent">
                <div class="card-header text-center">
                    <h2 class="text-dark">Bienvenido al menú de opciones</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="d-flex flex-column align-items-center gap-3">
                            <!-- Botones más estrechos -->
                            <button type="button" class="btn btn-primary btn-sm w-50" onclick="location.href='{{ route('crear') }}'">Crear</button>
                            <button type="button" class="btn btn-success btn-sm w-50" onclick="location.href='{{ route('leer') }}'">Leer</button>
                            <button type="button" class="btn btn-warning btn-sm w-50" onclick="location.href='{{ route('actualizar') }}'">Actualizar</button>
                            <button type="button" class="btn btn-danger btn-sm w-50" onclick="location.href='{{ route('eliminar') }}'">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Animación de la notificación
    document.addEventListener('DOMContentLoaded', function() {
        var notification = document.getElementById('loginNotification');
        notification.style.opacity = '1';
        notification.style.transition = 'opacity 0.5s ease-in-out';

        // Ocultar la notificación después de 2 segundos
        setTimeout(function() {
            notification.style.opacity = '0';
            setTimeout(function() {
                notification.style.display = 'none';
            }, 500);
        }, 2000);
    });
</script>

@endsection