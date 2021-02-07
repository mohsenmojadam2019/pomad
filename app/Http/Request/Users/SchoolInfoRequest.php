<?php


namespace App\Http\Request\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SchoolInfoRequest extends FormRequest
{

    public function rules(){
        return[
            'school_9'=> 'required',
            'school_10'=> 'required',
            'school_11'=> 'required',
            'school_12'=> 'required',
        ];
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return[
            'school_9.required'=>' :attribute الزامی می باشد ',
            'school_10.required'=>' :attribute الزامی می باشد ',
            'school_11.required'=>' :attribute الزامی می باشد ',
            'school_12.required'=>' :attribute الزامی می باشد ',

        ];

    }




}
