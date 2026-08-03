<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DailyBibleReading extends Model
{
    protected $guarded = [];

    public function prayerJournals(): HasMany
    {
        return $this->hasMany(PrayerJournal::class);
    }

    public function aiInsights(): HasMany
    {
        return $this->hasMany(AiInsight::class);
    }
}