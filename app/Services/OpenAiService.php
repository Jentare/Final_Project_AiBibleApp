<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpenAiService
{
    protected string $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.openai.key');
    }

    public function generatePrayerInsight(string $passageContent, string $journalEntry): ?string
    {
        $response = Http::withToken($this->apiKey)
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o-mini',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'You are a thoughtful spiritual guide. Provide a brief, encouraging prayer insight or theme-matching reflection based on the user\'s journal entry and the provided Bible passage.'
                    ],
                    [
                        'role' => 'user',
                        'content' => "Bible Passage: {$passageContent}\n\nMy Journal Reflection: {$journalEntry}"
                    ]
                ],
                'temperature' => 0.7,
                'max_tokens' => 200,
            ]);

        if ($response->successful()) {
            return $response->json('choices.0.message.content') ?? null;
        }

        return null;
    }
}