<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    //
    protected $fillable = [
        'nome',
    ];

   public function Users()
   {
       return $this->hasMany(User::class);
   }
}
