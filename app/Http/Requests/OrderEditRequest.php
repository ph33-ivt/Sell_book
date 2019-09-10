<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderEditRequest extends FormRequest
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
            'name'=>'required|min:1|unique:orders,name',
            'address'=>'required|min:1',
            'tel'=>'required|numeric|min:1'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Input name', 
            'name.min'=>'Must not be empty',
            'name.unique'=>'This order exists',
            'address.required'=>'Input address',
            'address.min'=>'Must not be empty',
            'tel.required'=>'Input telephone number',
            'tel.min'=>'Must not be empty',
            'tel.numeric'=>'Must be number'
        ];

    }
}
