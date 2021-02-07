<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('users')->insert([
            'username' => 'mohsen',
            'password' => 'mojadam',
            'email' => 'm@gmail.com',
            'main_number' => '09165899520',
            'national_code' => '1810037492',
        ]);


    }
}
