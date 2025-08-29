<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserve extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'car_id',
        'start_date',
        'end_date',
        'total_amount',
        'resources', // agora plural
        'status'
    ];

    protected $casts = [
        'resources' => 'array', // Laravel converte automaticamente JSON <-> array
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

}

