<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable=['category_id','title','status'];


    //   use SoftDeletes;
//    protected $dates=['deleted_at'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
