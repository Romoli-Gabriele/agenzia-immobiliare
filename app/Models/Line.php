<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Line extends Model
{
    use HasFactory;

    public function reservation():HasOne{
        return $this->hasOne(Reservation::class,'id_prenotazione');
    }
    public function apartment():BelongsTo{
        return $this->belongsTo(Apartment::class, 'id_appartamento');
    }
}
