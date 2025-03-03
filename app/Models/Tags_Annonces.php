<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags_Annonces extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
    public function annonces()
    {
        return $this->belongsToMany(Annonce::class);
    }
}
