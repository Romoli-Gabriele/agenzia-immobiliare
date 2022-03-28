<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'dataprenotazione',
        'confermaprenotazione',
    ];

    public function user():HasOne{
        return $this->hasOne(User::class, 'id_user');
    }
}
