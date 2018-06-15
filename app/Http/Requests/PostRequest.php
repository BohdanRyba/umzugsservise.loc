<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post_img' => 'require|string|max:255',
            'de-title' => 'require|string|max:255',
//            'en-title'          => 'require|string|max:255',
//            'ru-title'          => 'require|string|max:255',
            'de-description' => 'require',
//            'en-description'    => 'require',
//            'ru-description'    => 'require',
            'de-content' => 'require',
//            'en-content'        => 'require',
//            'ru-content'        => 'require',
            'status' => 'require|string|max:255'
        ];

    }

    public function messages()
    {
        return [
            'post_img' => 'Image must be uploaded',
            'de-title' => 'Title field is required',
//            'en-title' => 'Title field is required',
//            'ru-title' => 'Title field is required',
            'de-description' => 'Description field is required',
//            'en-description' => 'Description field is required',
//            'ru-description' => 'Description field is required',
            'de-content' => 'Content field is required',
//            'en-content' => 'Content field is required',
//            'ru-content' => 'Content field is required',
            'status' => 'Status field is required'
        ];
    }
}
