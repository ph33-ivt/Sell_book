<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'name'=>'required|min:1',
            'address'=>'required|min:1',
            'tel'=>'required|numeric|min:1',
            // 'image'=>'required'
        ];
    }

    public function messages(){
        return [
        'name.required'=>'please input name',
        'name.min'=>'at least one letter required',
        'address.required'=>'please input address',
        'address.min'=>'please fill correct address',
        'tel.required'=>'please input phone number',
        'tel.numeric'=>'phone number must be number',
        'tel.min'=>'phone number is incorrect'
        // 'image.required'=>'image is required'
        ];
    }
}
