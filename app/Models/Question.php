<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $guarded = [];

    protected $casts = [
        'due_at' => 'datetime',
        'genders' => 'array',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function getSentimentAttribute()
    {
        if (!$this->answers()->count()) {
            return 'not_applicable';
        }

        $avgCompound = $this->answers()->avg('sentiment->compound');

        if ($avgCompound >= 0.05) {
            return 'positive';
        } else if ($avgCompound <= -0.05) {
            return 'negative';
        }

        return 'neutral';
    }
}
