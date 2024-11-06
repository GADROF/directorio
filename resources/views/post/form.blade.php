<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row mb-4">
                    <div class="col-md-3 mb-4">
                        <div class="form-group mb-3">
                            <label for="direccion_mac" class="form-label">{{ __('Direccion Mac') }} <span style="color: red;">*</span></label>
                            <input type="text" name="direccion_mac" class="form-control @error('direccion_mac') is-invalid @enderror" value="{{ old('direccion_mac', $post->direccion_mac ?? '') }}" id="direccion_mac" placeholder="Direccion Mac" required>
                            @error('direccion_mac')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="serial" class="form-label">{{ __('Serial') }} <span style="color: red;">*</span></label>
                            <input type="text" name="serial" class="form-control @error('serial') is-invalid @enderror" value="{{ old('serial', $post->serial ?? '') }}" id="serial" placeholder="Serial" required>
                            @error('serial')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="bienes_id_cliente" class="form-label">{{ __('Bienes Id Cliente') }} <span style="color: red;">*</span></label>
                            <input type="text" name="bienes_id_cliente" class="form-control @error('bienes_id_cliente') is-invalid @enderror" value="{{ old('bienes_id_cliente', $post->bienes_id_cliente ?? '') }}" id="bienes_id_cliente" placeholder="Bienes Id Cliente" required>
                            @error('bienes_id_cliente')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="form-group mb-3">
                            <label for="ext" class="form-label">{{ __('Ext') }} <span style="color: red;">*</span></label>
                            <input type="text" name="ext" class="form-control @error('ext') is-invalid @enderror" value="{{ old('ext', $post->ext ?? '') }}" id="ext" placeholder="Ext" required>
                            @error('ext')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="ip" class="form-label">{{ __('Ip') }} <span style="color: red;">*</span></label>
                            <input type="text" name="ip" class="form-control @error('ip') is-invalid @enderror" value="{{ old('ip', $post->ip ?? '') }}" id="ip" placeholder="Ip" required>
                            @error('ip')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="puerta_de_enlace" class="form-label">{{ __('Puerta De Enlace') }} <span style="color: red;">*</span></label>
                            <input type="text" name="puerta_de_enlace" class="form-control @error('puerta_de_enlace') is-invalid @enderror" value="{{ old('puerta_de_enlace', $post->puerta_de_enlace ?? '') }}" id="puerta_de_enlace" placeholder="Puerta De Enlace" required>
                            @error('puerta_de_enlace')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="form-group mb-3">
                            <label for="marca_descripcion" class="form-label">{{ __('Marca Descripcion') }}</label>
                            <input type="text" name="marca_descripcion" class="form-control @error('marca_descripcion') is-invalid @enderror" value="{{ old('marca_descripcion', $post->marca_descripcion ?? '') }}" id="marca_descripcion" placeholder="Marca Descripcion">
                            @error('marca_descripcion')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="modelo_nombre_host" class="form-label">{{ __('Modelo Nombre Host') }}</label>
                            <input type="text" name="modelo_nombre_host" class="form-control @error('modelo_nombre_host') is-invalid @enderror" value="{{ old('modelo_nombre_host', $post->modelo_nombre_host ?? '') }}" id="modelo_nombre_host" placeholder="Modelo Nombre Host">
                            @error('modelo_nombre_host')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="discado_direct" class="form-label">{{ __('Discado Direct') }}</label>
                            <input type="text" name="discado_direct" class="form-control @error('discado_direct') is-invalid @enderror" value="{{ old('discado_direct', $post->discado_direct ?? '') }}" id="discado_direct" placeholder="Discado Direct">
                            @error('discado_direct')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="form-group mb-3">
                            <label for="direccion_id" class="form-label">{{ __('Direccion') }} <span style="color: red;">*</span></label>
                            <select name="direccion_id" class="form-control @error('direccion_id') is-invalid @enderror" id="direccion_id" required>
                                <option value="">Seleccione una dirección</option>
                                <option value="activo" {{ old('status', $post->status ?? '') == 'activo' ? 'selected' : '' }}>Activo</option>
                                @foreach($direcciones as $direccion)
                                    <option value="{{ $direccion->id }}" {{ old('direccion_id', $post->direccion_id ?? '') == $direccion->id ? 'selected' : '' }}>
                                        {{ $direccion->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('direccion_id')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="ubicacion_id" class="form-label">{{ __('Ubicacion') }} <span style="color: red;">*</span></label>
                            <select name="ubicacion_id" class="form-control @error('ubicacion_id') is-invalid @enderror" id="ubicacion_id" required>
                                <option value="">Seleccione una ubicación</option>
                                <option value="activo" {{ old('status', $post->status ?? '') == 'activo' ? 'selected' : '' }}>Activo</option>
                                @foreach($ubicaciones as $ubicacion)
                                    <option value="{{ $ubicacion->id }}" {{ old('ubicacion_id', $post->ubicacion_id ?? '') == $ubicacion->id ? 'selected' : '' }}>
                                        {{ $ubicacion->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ubicacion_id')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="piso_id" class="form-label">{{ __('Piso') }} <span style="color: red;">*</span></label>
                            <select name="piso_id" class="form-control @error('piso_id') is-invalid @enderror" id="piso_id" required>
                                <option value="">Seleccione un piso</option>
                                <option value="activo" {{ old('status', $post->status ?? '') == 'activo' ? 'selected' : '' }}>Activo</option>
                                @foreach($pisos as $piso)
                                    <option value="{{ $piso->id }}" {{ old('piso_id', $post->piso_id ?? '') == $piso->id ? 'selected' : '' }}>
                                        {{ $piso->numero }}
                                    </option>
                                @endforeach
                            </select>
                            @error('piso_id')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="status" class="form-label">{{ __('Status') }} <span style="color: red;">*</span></label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror" id="status" required>
                                <option value="">Seleccione un status</option>
                                <option value="activo" {{ old('status', $post->status ?? '') == 'activo' ? 'selected' : '' }}>Activo</option>
                                <option value="inactivo" {{ old('status', $post->status ?? '') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2 mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">{{ __('Registrar') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>