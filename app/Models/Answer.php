<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    protected $guarded = [];

    protected $casts = [
        'keywords' => 'json',
        'sentiment' => 'json',
        'summary' => 'json',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getSentimentAttribute(): string
    {
        if ($this->sentiment["compound"] >= 0.05) {
            return 'positive';
        } else if ($this->sentiment["compound"] <= -0.05) {
            return 'negative';
        }

        return 'neutral';
    }
}
