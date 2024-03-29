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
        Schema::create('rapid_profiles', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Футбол', 'Переводчик']);
            $table->string('host');
            $table->string('access_key');
            $table->integer('facts_count');
            $table->integer('count');
            $table->dateTime('activation_facts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapid_profiles');
    }
};
