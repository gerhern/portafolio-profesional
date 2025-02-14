<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'nombre' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'asunto' => ['required','string','max:255'],
            'mensaje' => ['required','string','min:10','max:255'],
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser una cadena.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe ser un email válido.',
            'email.max' => 'El email no puede tener más de 255 caracteres.',
            'asunto.required' => 'El asunto es obligatorio.',
            'asunto.string' => 'El asunto debe ser una cadena.',
            'asunto.max' => 'El asunto no puede tener más de 255 caracteres.',
            'mensaje.required' => 'El mensaje es obligatorio.',
            'mensaje.string' => 'El mensaje debe ser una cadena.',
            'mensaje.min' => 'El mensaje debe tener al menos 10 caracteres.',
            'mensaje.max' => 'El mensaje no puede tener más de 255 caracteres.',
        ];
    }
}
