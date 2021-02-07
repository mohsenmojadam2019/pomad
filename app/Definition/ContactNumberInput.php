<?php


namespace App\Definition;


class ContactNumberInput
{

    public static function getContactInfoInputNames(){
        return [
            'mother_number'=> 'mother',
            'father_number'=> 'father',
            'telegram_number'=> 'telegram',
            'emergency_number'=> 'emergency',
            'whatsapp_number'=> 'whatsapp',
            'home_number'=> 'home',
        ];
    }

}
