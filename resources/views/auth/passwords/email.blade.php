@extends('layouts.app')
@section('content')
<section class="h-120 gradient-form">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-5">
                <div class="card rounded text-white transparent-bg">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <h4 class="mt-2 mb-4 pb-1">Recuperación</h4>
                                </div>
                                <form method="POST" action="{{route('register') }}">
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name" 
                                               value="{{ old('name') }}" required autocomplete="name" autofocus 
                                               placeholder="Nombre" style="border: 2px solid turquoise;"/>
                                        <label class="form-label" for="name">{{ __('') }}</label>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" 
                                               placeholder="Dirección de correo electrónico"
                                               style="border: 2px solid turquoise;"/>
                                        <label class="form-label" for="email">{{ __('') }}</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="new-password" placeholder="Contraseña"
                                               style="border: 2px solid turquoise;"/>
                                        <label class="form-label" for="password">{{ __('') }}</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input id="password-confirm" type="password" 
                                               class="form-control" name="password_confirmation" required
                                               autocomplete="new-password" placeholder="Confirmar contraseña"
                                               style="border: 2px solid turquoise;"/>
                                        <label class="form-label" for="password-confirm">{{ __('') }}</label>
                                    </div>
                                    
                                    <!-- Selector de pregunta de seguridad -->
                                    <div class="form-outline mb-3">
                                        <select id="security_question" name="security_question" 
                                                class="form-control @error('security_question') is-invalid @enderror" 
                                                required style="border: 2px solid turquoise;">
                                            <option disabled selected value="">Seleccione una pregunta de seguridad</option>
                                            <option value="mascota">¿Cuál es el nombre de tu primera mascota?</option>
                                            <option value="ciudad">¿En qué ciudad naciste?</option>
                                            <option value="escuela">¿Cuál fue el nombre de tu primera escuela?</option>
                                        </select>
                                        @error('security_question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- Campo para la respuesta de seguridad -->
                                    <div class="form-outline mb-3">
                                        <input id="security_answer" type="text"
                                               class="form-control @error('security_answer') is-invalid @enderror" 
                                               name="security_answer"
                                               value="{{ old('security_answer') }}" required 
                                               placeholder="Respuesta a la pregunta de seguridad"
                                               style="border: 2px solid turquoise;"/>
                                        @error('security_answer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="text-center pt-1 mb-4 pb-1">
                                        <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-4 mb-3">
                                            {{ __('Restablecer Contraseña') }}
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="{{ asset('js/app.js') }}"></script>
</html>