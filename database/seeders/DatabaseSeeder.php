<?php

namespace Database\Seeders;

use App\Models\Workshop;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        $this->call([EducationalFieldTableSeeder::class,]);
        $this->call([ChannelsTableSeeder::class,]);

//        $this->call([ExamTestTableSeeder::class,]);
//        $this->call([ReagentTableSeeder::class,]);
//        $this->call([ServiceCategorieTableSeeder::class,]);
//        $this->call([GradeTableSeeder::class,]);
//        $this->call([EducationalGroupTableSeeder::class,]);
//        $this->call([WorkshopTypeTableSeeder::class,]);
//        $this->call([DiplomaFieldTableSeeder::class,]);
//        $this->call([UserTableSeeder::class,]);
//        $this->call([UserEducationalInfoTableSeeder::class,]);
//        $this->call([WorkshopTableSeeder::class,]);
//        $this->call([SpecialStudentTableSeeder::class,]);
//        $this->call([UserServiceTableSeeder::class,]);
//        $this->call([ConsultingPlanningTableSeeder::class,]);


    }
}
