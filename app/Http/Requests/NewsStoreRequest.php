<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsStoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:3', 'max:150'],
            'description' => ['required', 'string', 'min:3', 'max:500'],
            'body' => ['required', 'string', 'min:3', 'max:10000'],
            'category' => ['sometimes', 'array'],
            'image' => ['sometimes']
        ];
    }



    public function messages()
    {
        return [
            'required' => 'Нужно заполнить поле :attribute'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Заголовок',
            'body' => 'Текст',
            'category' => 'Категории'
        ];
    }
}
