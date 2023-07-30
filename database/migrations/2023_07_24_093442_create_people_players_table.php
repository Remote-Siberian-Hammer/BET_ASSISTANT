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
        Schema::create('people_players', function (Blueprint $table) {
            $table->id();
            $table->integer('SportId');
            $table->integer('TeamId');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Image')
                ->nullable();
            $table->string('Slug')
                ->unique();
            $table->foreign('SportId')
                ->references('id')
                ->on('sports')
                ->onDelete('cascade');
            $table->foreign('TeamId')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people_players');
    }
};
