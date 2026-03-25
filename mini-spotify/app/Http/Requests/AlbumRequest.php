<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
            'release_year' => 'required|integer|max:2026',
            'artist_id' => 'required|exists:artists,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'release_year.required' => 'The release year field is required.',
            'release_year.max' => 'The release year may not be greater than 2026 characters.',
            'artist_id.required' => 'The artist field is required.',
            'artist_id.exists' => 'The artist field does not exist.',
        ];
    }
}
