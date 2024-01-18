<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
       $role= [
           "name"=>"required|max:40",
           "message"=>"required|max:700",
           'alt'=>'required|max:200',
           'image'=>'required|mimes:png,jpg,jpeg,webp|max:2048',
        ];

        if ($this->method() == 'PUT') {
            $role['image']='sometimes|mimes:png,jpg,jpeg,webp|max:2048';
        }
        return $role;
    }
}
