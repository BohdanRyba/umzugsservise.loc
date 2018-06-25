<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'status' => 'required',
            'de-name' => 'required',
            'en-name' => 'required',
            'ru-name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'status' => 'Status is required field',
            'de-name' => 'Deutsch Name is required field',
            'en-name' => 'English Name is required field',
            'ru-name' => 'Russian Name is required field',
        ];
    }

}
