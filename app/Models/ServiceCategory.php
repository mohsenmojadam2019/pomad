<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //   use SoftDeletes;
//    protected $dates=['deleted_at'];

protected $fillable=['title','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function workshop()
    {
        return $this->hasMany(Workshop::class);
    }
}
