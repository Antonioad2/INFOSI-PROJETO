<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    //
    use softdeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'nif',
        'vehicle_logbook_upload',
        'bi_upload',
        'image',
        'address',
        'city',
        'country',    
    ];
    public function automobiles()
    {
        return $this->hasMany(Automobile::class);
    }
}
