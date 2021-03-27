<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Microphone extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'picture',
        'polar_pattern',
        'frequency_response',
        'price'
    ];

    protected $appends = ['price_in_quetzales', 'picture'];

    public function getPriceInQuetzalesAttribute()
    {
        return $this->price * 7.73;
    }

    public function getPictureAttribute(): string
    {
        return "https://ozwild-microphones-album.s3.us-east-2.amazonaws.com/{$this->id}.webp";
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function uses(): HasMany
    {
        return $this->hasMany(MicrophoneUses::class);
    }

    public function patterns(): BelongsToMany
    {
        return $this->belongsToMany(PolarPattern::class, 'microphone_patterns', 'microphone_id', 'pattern_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(MicrophoneType::class, 'type_id');
    }

}
