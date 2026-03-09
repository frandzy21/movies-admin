<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectorRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'birth_year' => 'required|integer|min:1900|max:2026',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Введіть ім\'я режисера',
            'name.max' => 'Ім\'я занадто довге (максимум 255 символів)',
            'birth_year.required' => 'Введіть рік народження',
            'birth_year.min' => 'Мінімальний рік 1900',
            'birth_year.max' => 'Максимальний рік 2026',
        ];
    }
}
