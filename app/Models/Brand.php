<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    const SHURE = 1;
    const SENNHEISER = 2;
    const ELECTROVOICE = 3;
    const BEHRINGER = 4;
    const RODE = 5;
    const SAMSON = 6;
    const TELEFUNKEN = 7;
    const BLUE = 8;
    const TOWNSEND = 9;
    const AKG = 10;
    const WARM_AUDIO = 11;
    const NEUMANN = 12;
    const MANLEY = 13;
    const ASTON_MICROPHONES = 13;
    const EARTHWORKS = 13;

    public $timestamps = FALSE;

    public function microphones(): HasMany
    {
        return $this->hasMany(Microphone::class);
    }
}
