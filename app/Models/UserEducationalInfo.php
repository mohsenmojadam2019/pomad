<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserEducationalInfo extends Model
{
    use HasFactory;
    protected $fillable=['user_id','educational_grade_id',
        'diploma_field_id',
        'educational_field_id',
        'average_Written_diplom','end_education','academic_year'

    ,'get_license_year','is_special'

    ];

    protected  $table='user_educational_infos';
//       use SoftDeletes;
//    protected $dates=['deleted_at'];

    public function educationalGrade()
    {
        return $this->belongsTo(  EducationalGrade::class);
    }
    public function educationalField()
    {
        return $this->belongsTo(  EducationalField::class);
    }

    public function userDiplomaField()
    {
        return $this->belongsTo(  DiplomaField::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
