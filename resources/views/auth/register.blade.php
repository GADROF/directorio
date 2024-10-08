
   @extends('layouts.app')
   @section('content')
             <section class="h-120 gradient-form"> <div class="container py-5 h-100">

<div class="row d-flex justify-content-center align-items-center h-100">

<div class="col-xl-5">
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

for="name">{{ __('') }}</label>

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
value="{{ old('email') }}" required autocomplete="email" placeholder="Dirección de correo electrónico"/>

<label class="form-label" for

></label>{{ __('') }}</label>

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
required autocomplete="new-password" placeholder="Contraseña"/>
<label class="form-label" for

"password">{{ __('') }}</label>

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
autocomplete="new-password" placeholder="Confirmar contraseña"/>

<label class="form-label" for

"password-confirm">{{ __('') }}</label>

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
<script src="{{ asset('js/app.js') }}"></script> 
tus scripts de JS -->
</html>