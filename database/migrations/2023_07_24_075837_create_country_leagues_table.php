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
        Schema::create('country_leagues', function (Blueprint $table) {
            $table->id();
            $table->integer('SportId');
            $table->integer('SectionId');
            $table->string('NameRu')
                ->unique()
                ->nullable();
            $table->string('NameEn')
                ->unique()
                ->nullable();
            $table->string('NameDe')
                ->unique()
                ->nullable();
            $table->string('NameFr')
                ->unique()
                ->nullable();
            $table->string('Image')
                ->nullable();
            $table->string('Slug')
                ->unique()
                ->nullable();
            $table->foreign('SportId')
                ->references('id')
                ->on('sports')
                ->onDelete('cascade');
            $table->foreign('SectionId')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_leagues');
    }
};
