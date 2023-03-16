<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:50'],
            'description' => ['required', 'string', 'min:3', 'max:200'],
            'body' => ['required', 'string', 'min:3', 'max:10000'],
            'category' => ['sometimes', 'array'],
            'image' => ['sometimes']
        ];
    }


    // public function messages()
    // {
    // }

    // public function attributes()
    // {
    // }
}
