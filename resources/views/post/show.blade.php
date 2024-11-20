@extends('layouts.app')

@section('template_title')
    {{ $post->name ?? __('Show') . " " . __('Post') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion Mac:</strong>
                            {{ $post->direccion_mac }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Serial:</strong>
                            {{ $post->serial }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Bienes Id Cliente:</strong>
                            {{ $post->bienes_id_cliente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ext:</strong>
                            {{ $post->ext }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ip:</strong>
                            {{ $post->ip }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Puerta De Enlace:</strong>
                            {{ $post->puerta_de_enlace }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Marca Descripcion:</strong>
                            {{ $post->marcaDescripcion->descripcion ?? 'N/A' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Modelo Nombre Host:</strong>
                            {{ $post->modelo_nombre_host ?? 'N/A' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Discado Direct:</strong>
                            {{ $post->discado_direct ?? 'N/A' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $post->direccion->nombre ?? 'N/A' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ubicacion:</strong>
                            {{ $post->ubicacion->nombre ?? 'N/A' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Piso:</strong>
                            {{ $post->piso->nombre ?? 'N/A' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Status:</strong>
                            {{ $post->status }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection