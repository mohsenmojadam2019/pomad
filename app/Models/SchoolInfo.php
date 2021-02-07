<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolInfo extends Model
{
    use HasFactory;
    protected $fillable=['user_id',
        'school_9',
        'school_10',
        'school_11',
        'school_12'];

//       use SoftDeletes;
//    protected $dates=['deleted_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
