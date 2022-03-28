<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Neighborhood extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'urlmappa',
    ];
    public function apartments():BelongsTo{
        return $this->belongsTo(Apartment::class);
    }
}
