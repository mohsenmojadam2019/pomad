<?php

namespace Database\Seeders;

use App\Definition\Reagent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReagentTableSeeder extends Seeder
{

    public function run()
    {


        $fields = Reagent::FIELDS;

        $insertedData = [];

        foreach ($fields as $field) {
            array_push($insertedData, ['title'  =>  $field]);
        }

        DB::table('reagents')->insert(
            $insertedData
        );




    }
}


