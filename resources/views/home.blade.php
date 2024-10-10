@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="btn-group w-100" role="group" aria-label="Opciones de ubicación">
                        <button type="button" class="btn btn-primary" id="btn-direccion" data-action="mostrar">
                            <span class="action-text">Mostrar Dirección</span>
                        </button>
                        <button type="button" class="btn btn-primary" id="btn-ubicacion" data-action="mostrar">
                            <span class="action-text">Mostrar Ubicación</span>
                        </button>
                        <button type="button" class="btn btn-primary" id="btn-piso" data-action="mostrar">
                            <span class="action-text">Mostrar Piso</span>
                        </button>
                    </div>
                </div>
            </div>

            <div id="info-container" class="mt-4" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" id="info-title"></h5>
                        <p class="card-text" id="info-content"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.btn-group .btn').forEach(button => {
        button.addEventListener('click', function() {
            const action = this.dataset.action;
            const infoContainer = document.getElementById('info-container');
            const infoTitle = document.getElementById('info-title');
            const infoContent = document.getElementById('info-content');
            const actionText = this.querySelector('.action-text');

            if (action === 'mostrar') {
                // Mostrar información
                infoContainer.style.display = 'block';
                infoTitle.textContent = this.textContent.trim();
                infoContent.textContent = `Información de ${this.textContent.trim()}`;
                
                // Cambiar el estado del botón
                this.dataset.action = 'ocultar';
                actionText.textContent = `Ocultar ${actionText.textContent.split(' ')[1]}`;
                this.classList.replace('btn-primary', 'btn-secondary');
            } else {
                // Ocultar información
                infoContainer.style.display = 'none';
                
                // Restablecer el estado del botón
                this.dataset.action = 'mostrar';
                actionText.textContent = `Mostrar ${actionText.textContent.split(' ')[1]}`;
                this.classList.replace('btn-secondary', 'btn-primary');
            }

            // Restablecer otros botones
            document.querySelectorAll('.btn-group .btn').forEach(otherButton => {
                if (otherButton !== this && otherButton.dataset.action === 'ocultar') {
                    otherButton.click();
                }
            });
        });
    });
</script>
@endsection