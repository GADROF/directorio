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
            'direccion_mac' => 'required|string',
            'serial' => 'required|string',
            'bienes_id_cliente' => 'required|string',
            'ext' => 'required|string',
            'ip' => 'required|string',
            'puerta_de_enlace' => 'required|string',
            'marca_descripcion' => 'required|string',
            'modelo_nombre_host' => 'required|string',
            'discado_direct' => 'required|string',
            'direccion' => 'required|string',
            'ubicacion' => 'required|string',
            'piso' => 'required|string',
        ];
    }
}