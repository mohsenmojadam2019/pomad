<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;


    protected $fillable =[
//        'mentor_name',
        'user_id','educational_group_id','start_date_job','collaborated_before','score'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialStudent()
    {
        return $this->belongsTo(SpecialStudent::class);
    }

    public function educationalGroup()
    {
        return $this->belongsTo(EducationalGroup::class);
    }





}
