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

    public $timestamps = FALSE;

    public function microphones(): HasMany
    {
        return $this->hasMany(Microphone::class);
    }
}
