@extends('layouts.app')

@section('template_title')
   Directorios Telefónicos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title" style="display: block; text-align: center; inline-size: 100%;">
                                {{ __('Directorios Telefónicos') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                  {{ __('Registrar') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div id="success-alert" class="alert alert-success m-4" style="display:none; text-align: center; font-size: 14px;">
                        <p id="alert-message"></p>
                    </div>

                    <div class="card-body bg-white">
                        <form action="{{ route('posts.index') }}" method="GET" class="mb-4 text-center">
                            <div class="input-group justify-content-center" style="max-width: 600px; margin: auto;">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ $search }}" style="min-width: 0;">
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

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Direccion Mac</th>
                                        <th>Bienes Id Cliente</th>
                                        <th>Marca Descripcion</th>
                                        <th>Modelo Nombre Host</th>
                                        <th>Ip</th>
                                        <th>Puerta De Enlace</th>
                                        <th>Ext</th>
                                        <th>Discado Direct</th>
                                        <th>Direccion</th>
                                        <th>Ubicacion</th>
                                        <th>Rango Ext Piso</th>
                                        <th>Piso</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $post->direccion_mac }}</td>
                                            <td>{{ $post->bienes_id_cliente }}</td>
                                            <td>{{ $post->marca_descripcion }}</td>
                                            <td>{{ $post->modelo_nombre_host }}</td>
                                            <td>{{ $post->ip }}</td>
                                            <td>{{ $post->puerta_de_enlace }}</td>
                                            <td>{{ $post->ext }}</td>
                                            <td>{{ $post->discado_direct }}</td>
                                            <td>{{ $post->direccion }}</td>
                                            <td>{{ $post->ubicacion }}</td>
                                            <td>{{ $post->rango_ext_piso }}</td>
                                            <td>{{ $post->piso }}</td>
                                            <td>
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('posts.show', $post->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Leer') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('posts.edit', $post->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Estas seguro de eliminar?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $posts->appends(['search' => $search])->links() !!}
            </div>
        </div>
    </div>

    <script type="text/javascript">
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