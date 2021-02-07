<?php


namespace App\Http\Request\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OrderDetailRequest extends FormRequest
{

    public function rules(){
        return[
            'phoneNumber'=> 'required|min:11|max:11'
        ];
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return[
            'phoneNumber.required'=>'require',
            'phoneNumber.min'=>'min',
            'phoneNumber.max'=>'max',
        ];

    }




}
