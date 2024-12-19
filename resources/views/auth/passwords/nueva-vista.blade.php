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
                                <form method="POST"action="{{route('nueva-vista-post') }}">
                                        @csrf
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
                      

                                    <div class="text-center pt-1 mb-4 pb-1">
                                        <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-4 mb-3">
                                            {{ __('Enviar enlace') }}
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