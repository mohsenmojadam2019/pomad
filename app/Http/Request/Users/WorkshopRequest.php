<?php


namespace App\Http\Request\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class WorkshopRequest extends FormRequest
{

    public function rules(){
        return[
            'title'=> 'required',
            'type'=> 'required',
            'date'=> 'required',
            'time'=> 'required',
            'period'=> 'required',
            'host'=> 'required',
            'place'=> 'required',
            'address'=> 'required',
            'service_type'=> 'required',
            'item'=> 'required',
            'string'=> 'required',

        ];
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return[
            'title.required'=>'  :attribute الزامی می باشد ',
            'type.required'=> ':attribute الزامی می باشد ',
            'date.required'=> 'الزامی می باشد   :attribute ',
            'time.required'=> '  :attribute  الزامی می باشد',
            'period.required'=> '  :attribute الزامی می باشد',
            'host.required'=> '  :attribute الزامی می باشد',
            'place.required'=> 'الزامی می باشد  :attribute ',
            'address.required'=> '  :attribute الزامی می باشد',
            'service_type.required'=> '  :attribute الزامی می باشد',
            'item.required'=> '  :attribute الزامی می باشد',
            'string.required'=> 'الزامی می باشد attribute: ',
        ];

    }




}
