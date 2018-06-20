<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'roles' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name is required field',
            'name.max' => 'Name must be less then 255 symbol',
            'email.required' => 'Email is required field',
            'email.max' => 'Email must be less then 255 symbol',
            'roles.required' => 'Role is required field'
        ];
    }

}
