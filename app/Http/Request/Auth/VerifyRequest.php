<?php


namespace App\Http\Request\Auth;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class VerifyRequest extends FormRequest
{

    public function rules(){
        return[
            'verify_code'=> 'required|min:5|max:5'
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
