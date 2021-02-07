<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopTypeTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('workshop_types')->insert([

            'title' => 'موفقیت',



        ]);


    }
}
