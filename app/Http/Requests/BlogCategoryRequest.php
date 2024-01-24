<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        $role = [
            'name' => 'required|unique:blog_categories|max:200'
        ];
        if ($this->method() == 'PUT') {
            $role['name'] = 'required|max:200|unique:blog_categories,id,' . $this->BlogCategory->id;
        }
        return $role;
    }
}
