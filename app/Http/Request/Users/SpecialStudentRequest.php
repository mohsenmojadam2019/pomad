<?php


namespace App\Http\Request\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SpecialStudentRequest extends FormRequest
{

    public function rules(){
        return[
            'student_code'=> 'required|unique'
        ];
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return[
            'student_code.required'=>'require',
            'student_code.unique'=>' :attribute بی اعتبار است '

        ];

    }




}
