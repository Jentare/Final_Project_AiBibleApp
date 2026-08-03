<?php

namespace App\Http\Controllers;

use App\Models\DailyBibleReading;
use App\Services\EsvApiService;
use App\Services\OpenAiService;
use Illuminate\Http\Request;

class DailyBibleReadingController extends Controller
{
    public function show($dayNumber, EsvApiService $esvApi)
    {
        $reading = DailyBibleReading::where('day_number', $dayNumber)->firstOrFail();
        $passageText = $esvApi->getPassage($reading->reference) ?? $reading->reference;

        return view('readings.show', compact('reading', 'passageText'));
    }

    public function storeJournal(Request $request, $dayNumber, EsvApiService $esvApi, OpenAiService $openAiService)
    {
        $request->validate([
            'entry_content' => 'required|string|min:3',
        ]);

        $reading = DailyBibleReading::where('day_number', $dayNumber)->firstOrFail();
        $passageText = $esvApi->getPassage($reading->reference) ?? $reading->reference;

        $insight = $openAiService->generatePrayerInsight($passageText, $request->entry_content);

        $reading->prayerJournals()->create([
            'entry_content' => $request->entry_content,
            'ai_insight' => $insight,
        ]);

        return redirect()->back()->with('success', 'Journal entry and AI insight saved successfully!');
    }
}