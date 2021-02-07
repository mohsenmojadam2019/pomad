<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NumberType extends Model
{
    use HasFactory;
    protected $fillable=['user_id','title','contact_number'];

public function user()
{
    return $this->belongsTo(User::class);
}




//   use SoftDeletes;
//    protected $dates=['deleted_at'];


}
