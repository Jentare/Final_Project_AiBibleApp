<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Day {{ $reading->day_number }} - {{ $reading->reference }}</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; line-height: 1.6; }
        .passage { background: #f9f9f9; padding: 20px; border-left: 4px solid #333; white-space: pre-wrap; margin-bottom: 20px; }
        textarea { width: 100%; height: 120px; margin-bottom: 10px; }
        button { padding: 10px 20px; background: #333; color: #fff; border: none; cursor: pointer; }
        .success { color: green; margin-bottom: 15px; }
    </style>
</head>
<body>
    <h1>Day {{ $reading->day_number }}: {{ $reading->reference }}</h1>

    <div class="passage">
        {{ $passageText }}
    </div>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('prayer-journal.store', $reading->day_number) }}" method="POST">
        @csrf
        <h3>Your Prayer Journal</h3>
        <textarea name="entry_content" placeholder="Write your thoughts or prayer reflection here..." required>{{ old('entry_content') }}</textarea>
        <br>
        <button type="submit">Submit & Get AI Insight</button>
    </form>

    @if(method_exists($reading, 'prayerJournals') && $reading->prayerJournals()->exists())
        <hr style="margin: 40px 0;">
        <h2>Previous Reflections</h2>
        @foreach($reading->prayerJournals()->latest()->get() as $journal)
            <div style="background: #f0f4f8; padding: 15px; margin-bottom: 15px; border-radius: 5px;">
                <p><strong>You wrote:</strong> {{ $journal->entry_content }}</p>
                <p><strong>AI Insight:</strong> {{ $journal->ai_insight }}</p>
            </div>
        @endforeach
    @endif
</body>
</html>