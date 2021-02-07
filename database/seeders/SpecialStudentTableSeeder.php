<?php

namespace Database\Seeders;

use App\Definition\UserGender;
use App\Models\SpecialStudent;
use App\Models\User;
use App\Models\UserEducationalInfo;
use App\Models\UserInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialStudentTableSeeder extends Seeder
{

    public function run()
    {



        $user = new User();
        $user->main_number = '09122214144';
        $user->national_code = '1111111111';
        $user->save();





//
        //user info

        $userInfo = new UserInfo();
        $userInfo->user_id = $user->id;
        $userInfo->first_name = 'testUser';
        $userInfo->last_name    ='testUser family';

        $userInfo->gender = UserGender::MALE;
        $userInfo->birth_date = date('Y-m-d h:i:s');

        $userInfo->save();



//
        //user educational info

        $userEducationalInfo = new UserEducationalInfo();

        $userEducationalInfo->user_id = $user->id;

        $userEducationalInfo->educational_field_id = 1;

        $userEducationalInfo->educational_grade_id = 4;

        $userEducationalInfo->diploma_field_id = 1;

        $userEducationalInfo->save();

        //special student
        $specialStudentInfo = new SpecialStudent();

        $specialStudentInfo->user_id = $user->id;

        $specialStudentInfo->educational_group_id = 1;
        $specialStudentInfo->student_code = 'SP_20210103' . $user->id;
        $specialStudentInfo->save();

    }
}
