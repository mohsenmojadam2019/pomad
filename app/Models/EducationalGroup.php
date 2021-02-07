<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'year', 'group'];

//       use SoftDeletes;
//    protected $dates=['deleted_at'];


//پسر1400
    public function title()
    {
        return $this->name . ' ' . $this->year;
    }

    public function educationalGroup()
    {
    return $this->hasOne(EducationalGroup::class);
    }

}
