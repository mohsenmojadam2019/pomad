<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;

    protected $fillable=['','','','','','','','','',];


    public function replies()
    {
        return $this->hasMany(Reply::class);


    }

    public function markAsBestReply(Reply $reply)
    {
        $this->update([

            'reply_id'=>$reply->id


        ]);


    }


    public function bestReply()
    {
        return $this->belongsTo(Reply::class,'reply_id');


    }





}
