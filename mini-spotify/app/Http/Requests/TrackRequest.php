<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrackRequest extends FormRequest
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
            'duration' => 'required|integer|min:1|max:2000',
            'album_id' => 'required|exists:albums,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'duration.required' => 'The duration field is required.',
            'duration.min' => 'The duration may not be greater than 1.',
            'duration.max' => 'The duration may not be greater than 2000.',
            'album_id.required' => 'The album field is required.',
            'album_id.exists' => 'The album field does not exist.',
        ];
    }
}
