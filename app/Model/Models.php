<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Models extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 
        'description', 
        'date'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
