<?php


namespace App\Http\Request\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ServiceRequest extends FormRequest
{

    public function rules(){
        return[
            'title'=> 'required'
        ];
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return[
            'title.required'=>' :attribute الزامی می باشد ',

        ];

    }




}
