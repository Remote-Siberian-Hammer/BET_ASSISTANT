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
        Schema::create('rapid_sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('rapid_profile_id');
            $table->timestamps();
            $table->foreign('rapid_profile_id')
                ->references('id')
                ->on('rapid_profiles')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapid_sessions');
    }
};
