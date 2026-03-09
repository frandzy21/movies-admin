<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'release_year' => 'required|integer|min:2000|max:2026',
            'director_id' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Введіть назву фільма',
            'title.max' => 'Назва занадто велика (максимум 255 символів)',
            'release_year.required' => 'Введіть рік релізу фільма',
            'release_year.min' => 'Мінімальний рік релізу 2000',
            'release_year.max' => 'Максимальний рік релізу 2026',
        ];
    }
}
