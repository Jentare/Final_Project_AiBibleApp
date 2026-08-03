<?php

namespace App\Http\Controllers;

use App\Models\DailyBibleReading;
use App\Models\PrayerJournal;
use App\Services\EsvApiService;
use App\Services\OpenAiService;
use Illuminate\Http\Request;

class PrayerJournalController extends Controller
{
    public function store(
        Request $request, 
        $dayNumber,
        EsvApiService $esvApi, 
        OpenAiService $openAiService
    ) {
        $validated = $request->validate([
            'entry_content' => ['required', 'string'],
        ]);


        $dailyBibleReading = DailyBibleReading::where('day_number', $dayNumber)->firstOrFail();


        // Fetch passage text from ESV API using the reading's reference
$passageText = $esvApi->getPassage($dailyBibleReading->reference ?? '') ?? $dailyBibleReading->reference;

        // Generate the prayer insight using OpenAI
        $aiInsight = $openAiService->generatePrayerInsight($passageText, $validated['entry_content']);

        // Create the prayer journal entry with both content and AI insight
        $prayerJournal = $dailyBibleReading->prayerJournals()->create([
            // 'user_id' => auth()->id(),
            'entry_content' => $validated['entry_content'],
            'ai_insight' => $aiInsight,
        ]);

        return redirect()->back()->with('success', 'Prayer journal saved with AI insight!');
    }
}