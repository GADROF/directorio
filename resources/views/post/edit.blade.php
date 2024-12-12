@extends('layouts.app')

@section('template_title')
    Actualizar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default custom-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span id="card_title">{{ __('Actualizar') }}</span>
                        <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}">{{ __('Back') }}</a> <!-- Botón de regreso -->
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.update', $post->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('post.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection