<?php


namespace App\Http\Request\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserInfoRequest extends FormRequest
{

    public function rules(){
        return[
            'first_name'=> 'required',
            'last_name'=> 'required',
            'gender'=> 'required',
            'birth_date'=> 'required',
        ];
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return[
            'first_name.required'=>' :attribute الزامی می باشد ',
            'last_name.required'=>' :attribute الزامی می باشد ',
            'gender.required'=>' :attribute الزامی می باشد ',
            'birth_date.required'=>' :attribute الزامی می باشد ',

        ];

    }




}
