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
    public function company()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
}
