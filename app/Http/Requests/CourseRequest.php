<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class courseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // or Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'course' => 'string',
            'start' => 'required',
            'end' => 'required',
            'price' => 'integer',
        ];
    }
}
