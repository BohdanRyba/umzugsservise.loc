<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateRequest extends FormRequest
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
            'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required',
            'status' => 'required',
            'categories' => 'required',
//            'categories.*' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'post_img.required' => 'Image is required',
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'content.required' => 'Content is required',
            'status.required' => 'Status is required',
            'category.required' => 'Category required',

        ];
    }
}
