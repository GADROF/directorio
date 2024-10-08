@extends('layouts.app')

@section('content')


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