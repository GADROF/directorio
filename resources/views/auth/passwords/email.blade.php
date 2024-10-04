<!doctype html>
<html lang="en">
<head>
    <title>Restablecer Contraseña</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('build/assets/estilos.css')}}">
    <style>
        body {
            background-image: url('{{ asset('build/assets/j.jpg') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
        }
        .reset-password-card {
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
                <div class="reset-password-card rounded text-black">
                    <div class="card-header text-center">{{ __('Restablecer Contraseña') }}</div>
                    <div class="card-body p-md-4 mx-md-4 text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Dirección del correo') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-danger">
                                        {{ __('Enviar enlace de recuperación') }}
                                    </button>
                                </div>
                            </div>
                        </form>
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