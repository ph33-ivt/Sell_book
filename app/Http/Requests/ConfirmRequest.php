<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmRequest extends FormRequest
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
            'email'=>'required|email',
            'content'=>'required|min:5'
        ];
    }
    public function messages()
    {
        return [
            'emai.required'=>'hãy nhập email',
            'email.email'=>'địa chỉ email không đúng',
            'content.required'=>'hãy nhập nội dung',
            'content.min'=>'nhập nội dung ít nhất 5 ký tự'
        ];
    }
}
