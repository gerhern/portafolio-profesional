<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificacionRequest extends FormRequest
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
            'institucion' => ['required','min:3','max:100'],
            'fecha_emision' => ['required','date'],
            'url_imagen' => $this->isMethod('PUT') ? ['nullable', 'image'] : ['required', 'image']
        ];
    }

    public function messages()
    {
        return [
          'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
            'nombre.max' => 'El nombre no puede tener más de 50 caracteres.',
            'institucion.required' => 'La institución es obligatoria.',
            'institucion.min' => 'La institución debe tener al menos 3 caracteres.',
            'institucion.max' => 'La institución no puede tener más de 100 caracteres.',
            'fecha_emision.required' => 'La fecha de emisión es obligatoria.',
            'fecha_emision.date' => 'La fecha de emisión debe ser una fecha válida.',
            'url_imagen.required' => 'La imagen es obligatoria.',
            'url_imagen.image' => 'El archivo debe ser una imagen valida.'
        ];
    }
}
