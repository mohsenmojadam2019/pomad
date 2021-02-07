<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserServiceTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('user_services')->insert([
            'category_id' => '1',
            'title' => 'مشاوره صفر',
            'status' => 'active',

        ]);


    }
}
