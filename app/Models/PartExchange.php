<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartExchange extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_id',
        'title',
        'first_name',
        'first_name',
        'last_name',
        'mobile',
        'email',
        'make',
        'model',
        'registeration',
        'mileage',
        'color',
        'model',
        'owners',
        'fuel_type',
        'transmissions',
    ];
}
