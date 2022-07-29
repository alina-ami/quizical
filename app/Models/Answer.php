<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;

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

    public function sentiment(): Attribute {
        return Attribute::make(
            set: function($value) {
                $value['type'] = $this->computeSentimentType($value['compound']);

                return json_encode($value);
            }
        );
    }

    public function computeSentimentType($value) {
        if ($value >= 0.05) {
            return 'positive';
        } else if ($value <= -0.05) {
            return 'negative';
        }

        return 'neutral';
    }

}
