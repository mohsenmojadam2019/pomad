<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
//       use SoftDeletes;
//    protected $dates=['deleted_at'];

    protected  $table='workshops';


    protected $fillable=[
        'group_id', 'educational_grade_id', 'type_id', 'service_type', 'title',
        'capacity','gender','date','time','duration_time','host','place','address','item','reserved_start'

    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function serviceCategory()
    {
        return $this->belongsToMany(ServiceCategory::class);
    }
    public function educationalGrade()
    {
        return $this->hasMany(educationalGrade::class);
    }



}
