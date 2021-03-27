<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MicrophoneType extends Model
{
    use HasFactory;

    const DINAMICO = 1;
    const CONDENSADOR = 2;
    const CINTA = 3;
    const SHOTGUN = 4;
    const LAVALIER = 5;

    public $timestamps = FALSE;

    protected $fillable = ['type'];

    public function microphones(): HasMany
    {
        return $this->hasMany(Microphone::class, 'type_id');
    }
}
