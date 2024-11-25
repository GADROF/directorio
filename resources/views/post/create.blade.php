@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Post
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="card-title flex-grow-1 text-center">{{ __('Crear') }} Registro</span> <!-- Título centrado -->
                        <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}">{{ __('Back') }}</a> <!-- Botón de regreso -->
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @include('post.form')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection