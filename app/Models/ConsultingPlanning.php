<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultingPlanning extends Model
{
    use HasFactory;
//مشاور باید از جدول کاربران گرفت
    protected $fillable=['user_id','date_start','time_start'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }









}
