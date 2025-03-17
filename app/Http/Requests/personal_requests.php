<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class personal_requests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:20',
            'app' => 'required|max:20',
            'apm' => 'required|max:20',
            'dni' => 'required|numeric|max:8',
            'cargo' => 'required|max:8',
        ];
    }
    public function attributes()
    {
        return [
            'nombre' => '<i>Nombre del Personal<i>',
            'app' => 'Apellido paterno',
            'apm' => 'Apellido materno',
            'dni' => 'DNI',
        ];
    }
    public function messages()
    {
        return [
            'dni' => 'El DNI debe tener 8 cifras',
        ];
    }
}
