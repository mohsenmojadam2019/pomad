<?php

namespace Database\Seeders;

use App\Definition\EducationalField;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationalFieldTableSeeder extends Seeder
{

    public function run()
    {


        $fields = EducationalField::FIELDS;

        $insertedData = [];

        foreach ($fields as $field) {
            array_push($insertedData, ['title'  =>  $field]);
        }


        DB::table('educational_fields')->insert(
            $insertedData
        );
    }
}
