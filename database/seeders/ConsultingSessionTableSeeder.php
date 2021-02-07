<?php

namespace Database\Seeders;

use App\Definition\ConsultingSession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultingSessionTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('consulting_sessions')->insert(
            ConsultingSession::FIELDS
        );
    }
}
