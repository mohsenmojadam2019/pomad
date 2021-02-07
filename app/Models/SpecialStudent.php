<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialStudent extends Model
{
    use HasFactory;
    protected $fillable=['mentor_id','user_id','educational_group_id','student_code','is_cancel','description'];



    public function consultingPlanning()
    {
        return $this->belongsTo(ConsultingPlanning::class);
    }



    public function educationalGroup()
    {
        return $this->belongsTo(EducationalGroup::class);
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function userInfo()
    {
        return $this->hasOne(UserInfo::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mentor(){

        return $this->hasOne(User::class,'id', 'mentor_id');

    }



}
