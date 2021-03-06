<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryEditRequest extends FormRequest
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
            'name'=>'required|min:1|unique:categories,name'

        ];
    }
    public function messages(){
        return [
            'name.required'=>'Category must not be empty',
            'name.min'=> 'One category requires',
            'name.unique'=> 'This category exists already'
        ];
    }
}
