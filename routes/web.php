<?php

use App\Http\Controllers\DailyBibleReadingController;
use App\Http\Controllers\PrayerJournalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $first = \App\Models\DailyBibleReading::orderBy('day_number')->first();
    return redirect('/readings/' . ($first ? $first->day_number : 1));
});

Route::get('/readings/{dayNumber}', [DailyBibleReadingController::class, 'show'])
    ->name('readings.show');

Route::post('/readings/{dayNumber}/journal', [PrayerJournalController::class, 'store'])
    ->name('prayer-journal.store');