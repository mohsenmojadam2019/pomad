<?php

namespace Database\Seeders;

use App\Definition\EducationalGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationalGroupTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('educational_groups')->insert(
            EducationalGroup::FIELDS
        );
    }
}
