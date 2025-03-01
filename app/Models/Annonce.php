<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'departure_city',
        'arrival_city',
        'departure_time',
        'arrival_time',
        'bus_description',
        'Thumbnail',
        'price',
        'status',
    ];
}
