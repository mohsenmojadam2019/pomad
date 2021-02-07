<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckMentor extends Model
{
    use HasFactory;

    protected $fillable=['user_id','mentor_id','special_student_id','educational_group_id','consulting_planning_id','Consultant_delay','Telephone',];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialStudent()
    {
        return $this->belongsTo(SpecialStudent::class);
    }


    public function consultingPlanning()
    {
        return $this->belongsTo(ConsultingPlanning::class);
    }




    public function educationalGroup()
    {
        return $this->belongsTo(EducationalGroup::class);
    }






}
