<?php

namespace Database\Seeders;

use App\Definition\Grade;
use App\Models\EducationalGrade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeTableSeeder extends Seeder
{

    public function run()
    {




        $fields = Grade::FIELDS;

        $insertedData = [];

        foreach ($fields as $field) {
            array_push($insertedData, ['title'  =>  $field]);
        }

        DB::table('educational_grades')->insert(
            $insertedData
        );



    }
}
