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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('SportId');
            $table->integer('SectionId');
            $table->integer('CountryLeaguesId');
            $table->string('Name')
                ->unique();
            $table->integer('TeamHome');
            $table->integer('TH_Current')
                ->nullable();
            $table->integer('TH_Display')
                ->nullable();
            $table->integer('TH_Period_1')
                ->nullable();
            $table->integer('TH_Period_2')
                ->nullable();
                $table->integer('TH_NormaiTime')
                ->nullable();
            $table->integer('TeamAway');
            $table->integer('TA_Current')
                ->nullable();
            $table->integer('TA_Display')
                ->nullable();
            $table->integer('TA_Period_1')
                ->nullable();
            $table->integer('TA_Period_2')
                ->nullable();
            $table->integer('TA_NormaiTime')
                ->nullable();
            $table->string('Slug')
                ->unique();
            $table->timestamps();
            $table->enum('Live', [true, false]);
            $table->foreign('SportId')
                ->references('id')
                ->on('sports')
                ->onDelete('cascade');
            $table->foreign('SectionId')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');
            $table->foreign('CountryLeaguesId')
                ->references('id')
                ->on('country_leagues')
                ->onDelete('cascade');
            $table->foreign('TeamHome')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');
            $table->foreign('TeamAway')
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
        Schema::dropIfExists('events');
    }
};
