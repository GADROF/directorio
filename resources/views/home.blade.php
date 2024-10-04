@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('build/assets/j.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .transparent-bg {
        background-color: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .card-body {
        text-align: center;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- Cambiado de col-md-8 a col-md-6 para hacerlo más pequeño -->
            <div class="card transparent-bg">
                <div class="card-header text-center">{{ __('Panel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('¡Has iniciado sesión!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection