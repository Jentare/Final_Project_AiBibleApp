<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class EsvApiService
{
    protected string $apiKey;
    protected string $baseUrl = 'https://api.esv.org/v3/passage/text/';

    public function __construct()
    {
        $this->apiKey = config('services.esv.api_key');
    }
    
    public function getPassage(string $passage): ?string
    {
        $response = Http::withToken($this->apiKey, 'Token')
            ->get($this->baseUrl, [
                'q' => $passage,
                'include-headings' => false,
                'include-verse-numbers' => true,
            ]);

        if ($response->successful()) {
            return $response->json('passages')[0] ?? null;
        }

        return null;
    }
}