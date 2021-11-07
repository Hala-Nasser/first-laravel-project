<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sweetRequest extends FormRequest
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
            'name'=> 'required|string',
            'price'=> 'required|numeric|min:1',
            'quantity'=>'required|numeric|min:1',
            'image'=> 'required|image',
        ];
        
    }

    public function messages(){

        return [
            'name.required'=> 'Name is required',
            'name.required'=> 'Name must be a string',
            'price.required'=> 'Price is required',
            'price.numeric'=> 'Price must be a number',
            'price.min:1'=> 'Wrong value for price',
            'quantity.required'=>'Quantity is required',
            'quantity.numeric'=> 'Quantity must be a number',
            'quantity.min:1'=> 'Wrong value for quantity',
            'image.required'=> 'Image is required',
            'image.image'=> 'Please choose image',
            ];

    }
}
