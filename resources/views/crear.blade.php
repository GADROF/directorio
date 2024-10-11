@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Registro de Directorio</h3>
                </div>
                <div class="card-body">
                    <form id="registroForm" action="{{ route('directorio.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="bienes_id_cliente">Bienes ID de Cliente <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="bienes_id_cliente" name="bienes_id_cliente" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="direccion">Dirección <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="direccion_mac">Dirección MAC <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="direccion_mac" name="direccion_mac" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="piso">Piso <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="piso" name="piso" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ext">Ext <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="ext" name="ext" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="marca_descripcion">Marca Descripción <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="marca_descripcion" name="marca_descripcion" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="modelo_nombre_host">Modelo Nombre de Host <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="modelo_nombre_host" name="modelo_nombre_host" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="puerto_enlace">Puerto de Enlace <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="puerto_enlace" name="puerto_enlace" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ip">IP</label>
                                    <input type="text" class="form-control" id="ip" name="ip">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="discado_directo">Discado Directo</label>
                                    <input type="text" class="form-control" id="discado_directo" name="discado_directo">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ubicacion">Ubicación</label>
                                    <input type="text" class="form-control" id="ubicacion" name="ubicacion">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="rango_ext_piso">Rango Ext. Piso</label>
                                    <input type="text" class="form-control" id="rango_ext_piso" name="rango_ext_piso">
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
                ¿Deseas registrar este nuevo directorio?
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