<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Car extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'chassi',
        'category',
        'models_id',
        'color_id',
        'brand_id',
        'fuel_id',
        'manufacture_date',
        'registration_date',
        'observations',
        'license_plate',
        'image',
        'value',
        'car_insurance',
        'car_insurance_image',
        'car_document',
        'car_document_image'
    ];

    public function models()
    {
        return $this->belongsTo(Models::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);      
}
    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }
   
}
