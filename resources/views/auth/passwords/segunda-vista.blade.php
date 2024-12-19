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
                                <form method="POST"action="{{route('segunda-vista-post') }}">
                                @csrf
                                    <!-- Selector de pregunta de seguridad -->
                                    <div class="form-group mb-3">
    
    <input type="text" class="form-control" value="{{$userInfo->pregunta->pregunta}}">
    <input type="hidden" class="form-control" name="email" value="{{$userInfo->email}}">
    @error('pregunta_id')
        <div class="invalid-feedback">{{ $message }}</div>
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
                                            {{ __('Consultar') }}
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