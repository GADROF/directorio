<!doctype html>
<html lang="en">
<head>
<title>Registro</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no" />
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.cs
s" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
crossorigin="anonymous"/>
<link rel="stylesheet" href="{{ asset('build/assets/estilos.css')}}">
<style>
body {
background-image: url('build/assets/j.jpg');
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 100vh; /* Asegura que el fondo cubra toda la pantalla */
}
.gradient-form {
background-color: transparent; /* Elimina el fondo blanco */
}
.card {
border: none; /* Elimina el borde de la tarjeta */

background-color: rgba(255, 255, 255, 0.85); /* Fondo semi-
transparente para la tarjeta */

max-width: 450px; /* Limita el ancho de la tarjeta */
margin: auto; /* Centra la tarjeta horizontalmente */
}
.form-outline {
margin-bottom: 20px; /* Espaciado entre campos */
}
</style>
</head>
<body>

@extends('layouts.app')
@section('content')
<section class="h-100 gradient-form">
<div class="container py-5 h-100">

<div class="row d-flex justify-content-center align-items-center h-
100">

<div class="col-xl-10">
<div class="card rounded text-black transparent-bg">
<div class="row g-0">
<div class="col-lg-12"> <!-- Cambié a col-lg-12 para

que ocupe todo el ancho -->

<div class="card-body p-md-5 mx-md-4">
<div class="text-center">
<img src="build/assets/p.png"
style="width: 270px;" alt="logo"> <!-- Ajusté el tamaño del logo -->

<h4 class="mt-4 mb-4 pb-1">REGISTRO</h4>

<!-- Ajusté los márgenes -->

</div>
<form method="POST" action="{{

route('register') }}">

@csrf
<div class="form-outline mb-3">
<input id="name" type="text"
class="form-control @error('name') is-invalid @enderror" name="name"
value="{{ old('name') }}" required autocomplete="name" autofocus
placeholder="Nombre"/>

<label class="form-label"

for="name">{{ __('Name') }}</label>

@error('name')
<span class="invalid-feedback"

role="alert">

<strong>{{ $message

}}</strong>

</span>
@enderror
</div>
<div class="form-outline mb-3">
<input id="email" type="email"
class="form-control @error('email') is-invalid @enderror" name="email"
value="{{ old('email') }}" required autocomplete="email" placeholder="Email
address"/>

<label class="form-label" for

"email">{{ __('Email Address') }}</label>

@error('email')
<span class="invalid-feedback"

role="alert">

<strong>{{ $message

}}</strong>

</span>
@enderror
</div>
<div class="form-outline mb-3">
<input id="password" type="password"
class="form-control @error('password') is-invalid @enderror" name="password"
required autocomplete="new-password" placeholder="Password"/>
<label class="form-label" for

"password">{{ __('Password') }}</label>

@error('password')
<span class="invalid-feedback"

role="alert">

<strong>{{ $message

}}</strong>

</span>
@enderror
</div>
<div class="form-outline mb-3">
<input id="password-confirm"
type="password" class="form-control" name="password_confirmation" required
autocomplete="new-password" placeholder="Confirm Password"/>

<label class="form-label" for

"password-confirm">{{ __('Confirm Password') }}</label>

</div>
<div class="text-center pt-1 mb-4 pb-1">
<button type="submit" class="btn

btn-primary btn-block fa-lg gradient-custom-2 mb-3">

{{ __('Registrarse') }}
</button>
</div>
<div class="d-flex align-items-center

justify-content-center pb-4">

<p class="mb-0 me-2">¿Ya tienes una

cuenta?</p>

<a href="{{ route('login') }}"

class="btn btn-outline-danger">Iniciar sesión</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
<script src="{{ asset('js/app.js') }}"></script> <!-- Asegúrate de incluir
tus scripts de JS -->
</body>
</html>