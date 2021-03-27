<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PolarPattern extends Model
{
    use HasFactory;

    const CARDIOIDE = 1;
    const SUPERCARDIOIDE = 2;
    const HIPERCARDIOIDE = 3;
    const OMNIDIRECCIONAL = 4;
    const BIDIRECCIONAL = 5;

    protected $fillable = ['pattern'];

    public function patterns(): BelongsToMany
    {
        return $this->belongsToMany(Microphone::class, 'microphone_patterns', 'pattern_id', 'microphone_id');
    }

}
