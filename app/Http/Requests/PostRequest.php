<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'ip' => 'required|string|max:255',
            'puerta_de_enlace' => 'required|string|max:255',
            'marca_descripcion' => 'nullable|string|max:255',
            'modelo_nombre_host' => 'nullable|string|max:255',
            'discado_direct' => 'nullable|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'ubicacion' => 'nullable|string|max:255',
            'piso' => 'required|string|in:estacionamiento,PB,piso 1,piso 2,piso 3,anexo',
            'status' => 'required|string|in:activo,inactivo',
        ];
    }
}