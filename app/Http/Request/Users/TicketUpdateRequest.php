<?php


namespace App\Http\Request\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TicketUpdateRequest extends FormRequest
{

    public function rules(){
        return[
            'summary'=> 'required',
            'description'=> 'required',
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return[
            'summary.required'=>'عنوان را وارد کنید',
            'description.required'=>'توضیحات را وارد نمایید',
//            'image.required'=>'عکس خود را وارد کنید',
//            'image.max'=>'حداکثر حجم عکس شما نباید بیشتر از دو مگابیت باشد',
        ];

    }




}
