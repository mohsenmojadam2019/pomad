<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamTestTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('exam_tests')->insert([

            'title' => 'گزینه دو',
         ]);

        DB::table('exam_tests')->insert([

            'title' => 'کانون',
        ]);
        DB::table('exam_tests')->insert([

            'title' => 'مرآت',
        ]);
        DB::table('exam_tests')->insert([

            'title' => 'نشانه',
        ]);







    }
}
