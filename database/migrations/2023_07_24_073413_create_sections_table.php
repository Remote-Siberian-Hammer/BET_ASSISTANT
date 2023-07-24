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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->integer('SportId')
                ->unique()
                ->nullable();
            $table->string('NameRu')
                ->nullable();
            $table->string('NameEn')
                ->nullable();
            $table->string('NameDe')
                ->nullable();
            $table->string('NameFr')
                ->nullable();
            $table->string('Slug')
                ->nullable();
            $table->timestamps();
            $table->foreign('SportId')
                ->references('id')
                ->on('sports')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
