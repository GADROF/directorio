@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Crear Nuevo Registro</h3>
                </div>
                <div class="card-body">
                    <form id="registroForm" action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="client_id">Bienes ID de Cliente <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="client_id" name="client_id" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">Dirección <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="mac_address">Dirección MAC <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="mac_address" name="mac_address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="floor">Piso <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="floor" name="floor" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ext">Ext <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="ext" name="ext" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="brand_description">Marca Descripción <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="brand_description" name="brand_description" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="model_hostname">Modelo Nombre de Host <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="model_hostname" name="model_hostname" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="gateway">Puerta de Enlace <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="gateway" name="gateway" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ip">IP <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="ip" name="ip" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="direct_dialing">Discado Directo</label>
                                    <input type="text" class="form-control" id="direct_dialing" name="direct_dialing">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="location">Ubicación <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ext_range">Rango Ext. Piso</label>
                                    <input type="text" class="form-control" id="ext_range" name="ext_range">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary" onclick="confirmarRegistro()">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Confirmación -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirmar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Deseas registrar este nuevo post?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" onclick="submitForm()">Sí</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function confirmarRegistro() {
    $('#confirmModal').modal('show');
}

function submitForm() {
    document.getElementById('registroForm').submit();
}
</script>
@endsection