<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMentor extends Model
{
    use HasFactory;
    protected $fillable=['user_id','mentor_id'];
    public function user()
    {
        return $this->belongsToMany(User::class);

    }

    public function educationalGroup()
    {
        return $this->belongsToMany(EducationalGroup::class);

    }

}
