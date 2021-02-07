<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    protected $fillable=[
       'user_id', 'first_name','last_name','gender','birth_date'
    ];
//   use SoftDeletes;
//    protected $dates=['deleted_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function specialStudent(){
        return $this->belongsTo(SpecialStudent::class);
    }


}


