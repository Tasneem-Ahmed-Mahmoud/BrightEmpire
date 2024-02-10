<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $role = [
            'name' => 'required|unique:categories|max:200',
            'title'=>"required|max:250",
            'description' => 'required',
            'content' => 'nullable',
            'url' => 'required|unique:seos|max:200',
            'seo_description' => 'required',
            'seo_title'=>'required:max:250'
        ];

        if ($this->method() == 'PUT') {
            $role['name'] = 'required|max:200|unique:categories,id,'. $this->category->id;
            $role['url'] = 'required|max:200|unique:seos,url,' . $this->category->seo->id;
        }
        return $role;
    }
    }

