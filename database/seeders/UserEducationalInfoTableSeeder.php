<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserEducationalInfoTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('user_educational_infos')->insert([


            'user_id' => '1',

            'educational_field_id' => '1',
            'educational_grade_id' => '1',
            'diploma_field_id' => '1',

            'average_Written_diplom' => '10',

            'end_education' => '1399',
            'academic_year' => '1400',
            'is_special' => '1',
            'get_license_year' => '1399',

        ]);



    }
}
