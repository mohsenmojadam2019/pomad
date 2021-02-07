<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('workshops')->insert([
            'group_id' => '1',

            'educational_grade_id' => '1',
            //سالیانه

            'type_id' => '1',

//            'title' => $faker->sentence(5),
//            'type' => $faker->paragraph(5),
            'title' => 'موفقیت',


            //ظرفیت
            'capacity' => 200,
            'gender' => 'پسر',
            'date' => '2020-12-04',
            'time' => '14:30',
            //طول مدت کارگاه
            'duration_time' => '03:00',
            //مجری
            'host' => 'آقای پور دستمالچی',
            //مکان
            'place' => 'انلاین',
            //نوع خدمات
            'service_type' => '1',
            'address' => 'مدرسه نردبان',
            //اقلام
            'item' => '1',
            'reserved_start' => '2020-12-04',


        ]);


    }
}
