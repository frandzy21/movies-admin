<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConcertRequest extends FormRequest
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
            'city' => 'required|string|min:1|max:255',
            'venue' => 'required|string|min:1|max:255',
            'date' => 'required|date|date_format:Y-m-d',
            'time' => 'required|date_format:H:i',
            'price' => 'required|integer|min:1',
            'artist_id' => 'required|integer|exists:artists,id',
        ];
    }

    public function messages(): array
    {
        return array(
            'city.required' => 'City is required',
            'city.min' => 'City must be at least 1 character',
            'city.max' => 'City must be less than 255 characters',
            'venue.required' => 'Venue is required',
            'venue.min' => 'Venue must be at least 1 character',
            'venue.max' => 'Venue must be less than 255 characters',
            'date.required' => 'Date is required',
            'date.date_format' => 'Date format is incorrect',
            'time.required' => 'Time is required',
            'time.date_format' => 'Time format is incorrect',
            'price.required' => 'Price is required',
            'price.integer' => 'Price must be integer',
            'price.min' => 'Price must be greater than 0',
            'artist_id.required' => 'Artist is required',

        );
    }
}
