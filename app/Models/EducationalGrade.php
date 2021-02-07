<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalGrade extends Model
{
    use HasFactory;
    protected $fillable=['title'];


    public function workShop()
    {
        return $this->belongsToMany(Workshop::class);
    }


}
