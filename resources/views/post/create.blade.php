@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Post
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <span class="card-title">{{ __('Crear') }} Registro</span>
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