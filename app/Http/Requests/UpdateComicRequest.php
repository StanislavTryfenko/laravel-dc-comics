<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            
            'title' => ['required', 'min:3', 'max:50', Rule::unique('comics')->ignore($this->comic->id)],
            'description' => 'required|min:3|max:4096',
            'thumb' => 'required|min:3|max:255',
            'price' => 'required|max:10',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:50',

        ];
    }
}
