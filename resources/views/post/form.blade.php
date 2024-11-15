<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row mb-4">
                <div class="col-md-3 mb-4">
                    <div class="form-group mb-3">
                        <label for="direccion_mac" class="form-label">{{ __('Dirección Mac') }} <span style="color: red;">*</span></label>
                        <input type="text" name="direccion_mac" class="form-control @error('direccion_mac') is-invalid @enderror" value="{{ old('direccion_mac', $post?->direccion_mac) }}" id="direccion_mac" placeholder="Dirección Mac" required>
                        {!! $errors->first('direccion_mac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="serial" class="form-label">{{ __('Serial') }} <span style="color: red;">*</span></label>
                        <input type="text" name="serial" class="form-control @error('serial') is-invalid @enderror" value="{{ old('serial', $post?->serial) }}" id="serial" placeholder="Serial" required>
                        {!! $errors->first('serial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="bienes_id_cliente" class="form-label">{{ __('Bienes Id Cliente') }} <span style="color: red;">*</span></label>
                        <input type="text" name="bienes_id_cliente" class="form-control @error('bienes_id_cliente') is-invalid @enderror" value="{{ old('bienes_id_cliente', $post?->bienes_id_cliente) }}" id="bienes_id_cliente" placeholder="Bienes Id Cliente" required>
                        {!! $errors->first('bienes_id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="form-group mb-3">
                        <label for="ext" class="form-label">{{ __('Ext') }} <span style="color: red;">*</span></label>
                        <input type="text" name="ext" class="form-control @error('ext') is-invalid @enderror" value="{{ old('ext', $post?->ext) }}" id="ext" placeholder="Ext" required>
                        {!! $errors->first('ext', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="ip" class="form-label">{{ __('IP') }} <span style="color: red;">*</span></label>
                        <input type="text" name="ip" class="form-control @error('ip') is-invalid @enderror" value="{{ old('ip', $post?->ip) }}" id="ip" placeholder="IP" required>
                        {!! $errors->first('ip', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="puerta_de_enlace" class="form-label">{{ __('Puerta de Enlace') }} <span style="color: red;">*</span></label>
                        <input type="text" name="puerta_de_enlace" class="form-control @error('puerta_de_enlace') is-invalid @enderror" value="{{ old('puerta_de_enlace', $post?->puerta_de_enlace) }}" id="puerta_de_enlace" placeholder="Puerta de Enlace" required>
                        {!! $errors->first('puerta_de_enlace', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="form-group mb-3">
                        <label for="marca_descripcion" class="form-label">{{ __('Marca Descripción') }} <span style="color: red;">*</span></label>
                        <select name="marca_descripcion" class="form-control @error('marca_descripcion') is-invalid @enderror" id="marca_descripcion" required>
                            <option disabled selected value="">Seleccione</option>
                            @foreach($marcadescripciones as $marcadescripcion)
                                <option value="{{$marcadescripcion->id}}">{{$marcadescripcion->descripcion}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('marca_descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="modelo_nombre_host" class="form-label">{{ __('Modelo Nombre Host') }}</label>
                        <input type="text" name="modelo_nombre_host" class="form-control @error('modelo_nombre_host') is-invalid @enderror" value="{{ old('modelo_nombre_host', $post?->modelo_nombre_host) }}" id="modelo_nombre_host" placeholder="Modelo Nombre Host">
                        {!! $errors->first('modelo_nombre_host', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="discado_direct" class="form-label">{{ __('Discado Directo') }}</label>
                        <input type="text" name="discado_direct" class="form-control @error('discado_direct') is-invalid @enderror" value="{{ old('discado_direct', $post?->discado_direct) }}" id="discado_direct" placeholder="Discado Directo">
                        {!! $errors->first('discado_direct', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="form-group mb-3">
                        <label for="direccion" class="form-label">{{ __('Dirección') }} <span style="color: red;">*</span></label>
                        <select name="direccion" class="form-control @error('direccion') is-invalid @enderror" id="direccion" required>
                            <option disabled selected value="">Seleccione</option>
                            @foreach($direcciones as $direccion)
                                <option value="{{$direccion->id}}">{{$direccion->nombre}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="ubicacion" class="form-label">{{ __('Ubicación') }} <span style="color: red;">*</span></label>
                        <select name="ubicacion" class="form-control @error('ubicacion') is-invalid @enderror" id="ubicacion" required>
                            <option disabled selected value="">Seleccione</option>
                            @foreach($ubicaciones as $ubicacion)
                                <option value="{{$ubicacion->id}}">{{$ubicacion->nombre}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('ubicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="piso" class="form-label">{{ __('Piso') }} <span style="color: red;">*</span></label>
                        <select name="piso" class="form-control @error('piso') is-invalid @enderror" id="piso" required>
                            <option disabled selected value="">Seleccione</option>
                            @foreach($pisos as $piso)
                                <option value="{{$piso->id}}">{{$piso->numero}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('piso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        <label for="status" class="form-label">{{ __('Status') }} <span style="color: red;">*</span></label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror" id="status" required>
                            <option disabled selected value="">Seleccione un status</option>
                            <option value="activo" {{ old('status', $post?->status) == 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ old('status', $post?->status) == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                        {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>
            <div class="text-center mt-2 mb-3">
                <button type="submit" class="btn btn-primary btn-lg">{{ __('Registrar') }}</button>
            </div>
        </div>
    </div>
</div>