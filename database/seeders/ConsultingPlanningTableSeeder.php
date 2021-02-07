<?php

namespace Database\Seeders;

use App\Definition\ConsultingPlanning;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultingPlanningTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('consulting_plannings')->insert(
            ConsultingPlanning::FIELDS
        );
    }
}
