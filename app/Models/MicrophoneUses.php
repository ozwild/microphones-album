<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MicrophoneUses extends Model
{
    use HasFactory;

    protected $fillable = ['usage'];

    public function microphone(): BelongsTo
    {
        return $this->belongsTo(Microphone::class);
    }
}
