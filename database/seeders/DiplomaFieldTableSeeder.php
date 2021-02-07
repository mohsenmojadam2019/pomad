<?php

namespace Database\Seeders;

use App\Definition\DiplomaField;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiplomaFieldTableSeeder extends Seeder
{

    public function run()
    {




        $fields = DiplomaField::FIELDS;

        $insertedData = [];

        foreach ($fields as $field) {
            array_push($insertedData, ['title'  =>  $field]);
        }

        DB::table('diploma_fields')->insert(
            $insertedData
        );




    }
}
