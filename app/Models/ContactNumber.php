<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactNumber extends Model
{
    use HasFactory;
protected $guarded=["id"];
//   use SoftDeletes;
//    protected $dates=['deleted_at'];


    public function user(){
        return $this->belongsTo(User::class);
    }


}
