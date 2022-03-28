<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'didascalia',
        'urlfoto'
    ];
    public function apartment():HasOne{
        return $this->hasOne(Apartment::class, 'id_apartment');
    }
    
}
