@extends('layouts.app')

@section('template_title')
    Ver
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 text-center w-100">{{ __('Ver') }}</h5>
                        <a class="btn btn-primary btn-sm ml-auto" href="{{ route('posts.index') }}">{{ __('Back') }}</a>
                    </div>

                    <div class="card-body">
                        <div class="row"> <!-- Contenedor para alinear horizontalmente -->
                            @php
                                $fieldMappings = [
                                    'direccion_mac' => 'Dirección MAC',
                                    'serial' => 'Serial',
                                    'bienes_id_cliente' => 'Bien Nacional',
                                    'ext' => 'Extensión',
                                    'ip' => 'Dirección IP',
                                    'puerta_de_enlace' => 'Puerto de Enlace',
                                    'marcaDescripcion.descripcion' => 'Descripción de la Marca',
                                    'modelo_nombre_host' => 'Modelo Host',
                                    'discado_direct' => 'Discado Directo',
                                    'direccion.nombre' => 'Dirección',
                                    'ubicacion.nombre' => 'Ubicación',
                                    'piso.nombre' => 'Piso',
                                    'status' => 'Estatus',
                                ];
                            @endphp

                            @foreach(['direccion_mac', 'serial', 'bienes_id_cliente', 'ext', 'ip', 'puerta_de_enlace', 'marcaDescripcion.descripcion', 'modelo_nombre_host', 'discado_direct', 'direccion.nombre', 'ubicacion.nombre', 'piso.nombre', 'status'] as $field)
                                <div class="col-md-6 mb-3"> <!-- Ajusta el tamaño de las columnas -->
                                    <div class="result-box"> <!-- Casilla para el resultado -->
                                        <strong>{{ __($fieldMappings[$field] ?? ucwords(str_replace('_', ' ', $field))) }}:</strong>
                                        <div class="result-value">{{ data_get($post, $field, 'N/A') }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">
@endpush
