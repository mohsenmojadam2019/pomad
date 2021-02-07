<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantMeeting extends Model
{
    use HasFactory;

    protected $fillable=['user_code','user_id','educational_group_id','start_session','end_session','consulting_planning_id',
        'login_user_session','logout_user_session','duration_meeting','duration_delay','consultant_delay','time_session','contact',];

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
