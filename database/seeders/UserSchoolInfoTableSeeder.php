<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSchoolInfoTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('user_school_infos')->insert([


            'user_id' => '1',

            'school_9' => 'خاتم',
            'school_10' => 'خاتم',
            'school_11' => 'خاتم'

        ]);



    }
}
