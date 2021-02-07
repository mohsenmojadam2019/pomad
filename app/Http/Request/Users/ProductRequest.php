<?php


namespace App\Http\Request\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductRequest extends FormRequest
{

    public function rules(){
        return[
            'product_name'=> 'required',
            'product_price'=> 'required'
        ];
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return[
            'product_name.required'=>' :attribute الزامی می باشد ',
            'product_price.required'=>' :attribute الزامی می باشد ',
        ];

    }




}
