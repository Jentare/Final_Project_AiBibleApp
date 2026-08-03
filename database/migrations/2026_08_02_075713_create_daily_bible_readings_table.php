<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daily_bible_readings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('day_number')->unique();
            $table->string('reference');
            $table->text('passage_content')->nullable();
            $table->string('theme_tag')->nullable();
            $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_bible_readings');
    }
};
