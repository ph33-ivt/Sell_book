<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'name'=>'required|min:1|unique:products,name',
            'price'=>'required|numeric|min:1',
            'quantity'=>'required|numeric|min:1',
            'status'=>'required|min:1',
            'description'=>'required|min:1',
            'product_image'=>'required|min:1'

        ];
    }
    public function messages(){
        return [
            'name.required'=>'Please fill in name',
            'name.min'=>'Must not be empty',
            'name.unique'=>'This product is in table already, please choose another',
            'price.required'=>'Please fill in price',
            'price.min'=>'Must not be empty',
            'price.numeric'=>'Must be number',
            'quantity.required'=>'Please fill in quantity',
            'quantity.min'=>'Must not be empty',
            'quantity.numeric'=>'Must be number',
            'status.required'=>'Please fill in status',
            'status.min'=>'Must not be empty',
            'description.required'=>'Please fill in description',
            'description.min'=>'Must not be empty',
            'product_image.required'=>'Please fill in image',
            'product_image.min'=>'Must not be empty'
        ];
    }
}
