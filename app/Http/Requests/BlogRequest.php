<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $role = [
           
            'title'=>"required|max:250",
            'description' => 'required',
            "content"=>"required",
            'alt'=>'required|max:200',
            'image'=>'required|mimes:png,jpg,jpeg,webp|max:2048',
            'url' => 'required|unique:seos|max:200',
            'seo_description' => 'required',
            'seo_title'=>'required:max:250',
           
        ];

        if ($this->method() == 'PUT') {
            $role['url'] = 'required|max:200|unique:seos,url,' . $this->blog->seo->id;
            $role['image']='sometimes|mimes:png,jpg,jpeg,webp|max:2048';
        }
        return $role;
    }
}
