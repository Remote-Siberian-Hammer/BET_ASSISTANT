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
        Schema::create('account_rapids', function (Blueprint $table) {
            $table->id();
            $table->string('Email')
                ->unique();
            $table->text('RapidTocken')
                ->unique()
                ->nullable();
            $table->integer('SportScoreCountQuery')
                ->nullable();
            $table->integer('TranslationMemoryWordCount')
                ->nullable();
            $table->char('NextUpdate', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_rapids');
    }
};
