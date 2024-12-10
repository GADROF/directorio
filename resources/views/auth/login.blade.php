    @extends('layouts.app')

    @section('content')
    <section class="h-100 gradient-form" style="background-color: ;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded- text-white transparent-bg">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <div class="text-center">
                                          
                                          <h4 class="mt-5 mb-5 pb-1">}jgkjg</h4>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <p>Por favor, inicie sesión en su cuenta</p>
                                        <div class="form-outline mb-3">
                                        <style>
  #email {
    border: 2px solid turquoise;
  }
</style>

<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Dirección de correo electrónico" />
                                            <label class="form-label" for="email">{{ __('                   ') }}</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-outline mb-4">
                                        <style>
  #password {
    border: 2px solid turquoise;
  }
</style>

<input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña" />
                                            <label class="form-label" for="password">{{ __('             ') }}</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Recuérdame') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-1 mb-3">
                                                {{ __('Iniciar Sesión') }}
                                            </button>
                                            @if (Route::has('password.request'))
    <a class="text-white" href="{{ route('password.request') }}">
        {{ __('¿Olvidaste tu Contraseña?') }}
    </a>
@endif
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                            <a href="{{ route('register') }}" class="btn btn-outline-danger">Crear nueva</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h3 class="mb-4">Directorio telefónico</h3>
                                    <h5 class=" mb-4">El sistema de diretorio telefónico interno facilita el acceso rápido a los contactos de los funcionarios de la Vicepresidencia, mejorando la comunicación y la colaboración dentro de la institución</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>