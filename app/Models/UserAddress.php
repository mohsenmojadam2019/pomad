<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAddress extends Model
{
    protected  $table='user_addresses';



    use HasFactory;
    protected $fillable =['user_id',
'province','city','address','lat','long','postal_code'
    ];


//       use SoftDeletes;
//    protected $dates=['deleted_at'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
