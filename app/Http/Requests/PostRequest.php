<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'direccion_mac' => 'required|string|max:255',
            'serial' => 'required|string|max:255',
            'bienes_id_cliente' => 'required|string|max:255',
            'ext' => 'required|string|max:255',
            'ip' => 'required|string|max:255|ip',
            'puerta_de_enlace' => 'required|string|max:255|ip',
            'marca_descripcion' => 'nullable|exists:marca_descripciones,id',
            'modelo_nombre_host' => 'nullable|string|max:255',
            'discado_direct' => 'nullable|string|max:255',
            'direccion_id' => 'required|exists:direcciones,id',
            'ubicacion_id' => 'required|exists:ubicaciones,id',
            'piso_id' => 'required|exists:pisos,id',
            'status' => ['required', Rule::in(['activo', 'inactivo'])],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'ip.ip' => 'El campo :attribute debe ser una dirección IP válida.',
            'puerta_de_enlace.ip' => 'El campo puerta de enlace debe ser una dirección IP válida.',
            'marca_descripcion.exists' => 'La marca descripción seleccionada no es válida.',
            'direccion_id.exists' => 'La dirección seleccionada no es válida.',
            'ubicacion_id.exists' => 'La ubicación seleccionada no es válida.',
            'piso_id.exists' => 'El piso seleccionado no es válido.',
            'status.in' => 'El estado debe ser activo o inactivo.',
        ];
    }
}