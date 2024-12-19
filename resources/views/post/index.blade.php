@extends('layouts.app')

@section('template_title')
    Directorios Telefónicos
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="header-content">
                        <span id="card_title">{{ __('Directorios Telefónicos') }}</span>
                        <div class="float-right">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right">
                                {{ __('Registrar') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div id="success-alert" class="alert alert-success m-4">
                    <p id="alert-message"></p>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.index') }}" method="GET" class="search-form">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ $search }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Buscar</button>
                                @if($search)
                                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Regresar</a>
                                @endif
                            </div>
                        </div>
                    </form>
                    
                    @if($search)
                        <div class="alert alert-info">
                            Mostrando resultados para: <strong>{{ $search }}</strong>
                        </div>
                    @endif
                    @if($search)
                    
                        <div class="table-responsive">
                            <table class="table custom-table">
                                <thead>
                                    <tr>
                                        <th>No</th> 
                                        <th>Mac</th>
                                        <th>Serial</th> 
                                        <th>Bien</th> 
                                        <th>Extensión</th>
                                        <th>Ip address</th>
                                        <th>Gateway</th>
                                        <th>Marca </th>
                                        <th>Modelo </th>
                                        <th>Discado </th> 
                                        <th>Dirección</th> 
                                        <th>Ubicación</th>
                                        <th>Piso</th>
                                        <th>Estatus</th> 
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $post->direccion_mac }}</td>
                                            <td>{{ $post->serial }}</td>
                                            <td>{{ $post->bienes_id_cliente }}</td> 
                                            <td>{{ $post->ext }}</td>
                                            <td>{{ $post->ip }}</td>
                                            <td>{{ $post->puerta_de_enlace }}</td>
                                            <td>{{ $post->marcaDescripcion?->descripcion }}</td>
                                            <td>{{ $post->modelo_nombre_host }}</td>
                                            <td>{{ $post->discado_direct }}</td> 
                                            <td>{{ $post->direccion?->nombre }}</td>
                                            <td>{{ $post->ubicacion?->nombre }}</td>
                                            <td>{{ $post->piso?->nombre }}</td>
                                            <td>{{ $post->status }}</td>
                                            <td>
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-sm btn-primary" href="{{ route('posts.show', $post->id) }}">
                                                        {{ __('Ver') }}
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('posts.edit', $post->id) }}">
                                                        {{ __('Actualizar') }}
                                                    </a>
        

    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar?')"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>

                                                </form>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>
                    @endif

                </div>

            </div>

            @if($search)

                {!! $posts->appends(['search' => $search])->links() !!}
            @endif

        </div>

    </div>

</div>

@endsection



@section('scripts')

<script>

    document.addEventListener('DOMContentLoaded', function() {

        var alert = document.getElementById('success-alert');

        var alertMessage = document.getElementById('alert-message');



        @if (Session::has('success'))

            alertMessage.textContent = "Todos sus datos han sido registrados exitosamente";

            showAlert();

        @endif



        @if (Session::has('deleted'))

            alertMessage.textContent = "Eliminado exitosamente";

            showAlert();

        @endif



        function showAlert() {

            alert.style.display = 'block';

            setTimeout(function() {

                alert.style.display = 'none';

            }, 3000);

        }

    });

</script>

@endsection