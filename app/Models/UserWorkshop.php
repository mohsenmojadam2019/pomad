<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkshop extends Model
{
    use HasFactory;


    protected $fillable=['user_id','workshop_id','is_present','has_reserved','online_time','guest_info','comment',];

public function user()
{
    return $this->belongsToMany(User::class);
}




}
