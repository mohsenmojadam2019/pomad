<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultingSession extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'next_date', 'next_time','lag_time', 'delay', 'contact','entry','exit'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
