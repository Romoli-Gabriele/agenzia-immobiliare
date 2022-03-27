<?php

namespace App\Models;

use App\Exceptions\Handler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'indirizzo',
        'prezzogiorno',
        'numerocamere',
        'postiletto',
        'usocucina',
        'parcheggio',
        'note'
    ];
    public function quartiere(): HasOne {
        return $this->hasOne(Neighborhood::class, 'id_quartiere');
    }
    public function proprietario(): HasOne{
        return $this->hasOne(User::class, 'id_proprietario');
    }
    public function foto(): HasMany{
        return $this->hasMany(Photo::class);
    }
    public function prenotazioni(): HasMany{
        return $this->hasMany(Reservation::class);
    }
    public function disponibilità(): HasMany{
        return $this->hasMany(Availability::class);
    }
}
