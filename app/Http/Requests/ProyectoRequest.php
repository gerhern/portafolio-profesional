<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'nombre' => ['required','min:3','max:50'],
            'descripcion' => ['required','min:10','max:255'],
            'descripcion_corta' => ['required','min:10','max:100'],
            'url_imagen' => $this->isMethod('PUT') ? ['nullable', 'image'] : ['required', 'image'],
        ];
    }

    public function messages(): array{
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
            'nombre.max' => 'El nombre no puede tener más de 50 caracteres.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.min' => 'La descripción debe tener al menos 10 caracteres.',
            'descripcion.max' => 'La descripción no puede tener más de 255 caracteres.',
            'descripcion_corta.required' => 'La descripción corta es obligatoria.',
            'descripcion_corta.min' => 'La descripción corta debe tener al menos 10 caracteres.',
            'descripcion_corta.max' => 'La descripción corta no puede tener más de 100 caracteres.',
            'url_imagen.required' => 'La imagen es obligatoria.',
            'url_imagen.image' =>  'La imagen debe ser un archivo de imagen valido.',
        ];
    }
}
