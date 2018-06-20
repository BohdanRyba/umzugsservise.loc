<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
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
            'email.unique' => 'Email already used',
            'password.required' => 'Password is required field',
            'roles.required' => 'Role Password is required field'
        ];
    }

}
