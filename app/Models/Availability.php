<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'disponibilità',
    ];

    public function apartment():BelongsTo {
        return $this->belongsTo(Apartment::class,'id_apartment');
    }
    public function line():hasOne {
        return $this->hasOne(Line::class,'id_lines');
    }
}
