<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorieTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('service_categories')->insert([


            'title' => 'public',

            'status' => '1'


        ]);



    }
}
