<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AiInsight extends Model
{
    protected $guarded = [];

    public function dailyBibleReading(): BelongsTo
    {
        return $this->belongsTo(DailyBibleReading::class);
    }
}