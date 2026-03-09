<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'author' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:10',
            'comment' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'author.required' => 'Введіть ім\'я автора',
            'author.max' => 'Ім\'я занадто велике (максимум 255 символів)',
            'rating.required' => 'Введіть рейтинг',
            'rating.min' => 'Мінімальний рейтинг 1',
            'rating.max' => 'Максимальний рейтинг 10',
            'comment.required' => 'Напишіть коментар',
            'comment.max' => 'Коментар занадто ведикий (максимум 255 символів)',
        ];
    }
}
