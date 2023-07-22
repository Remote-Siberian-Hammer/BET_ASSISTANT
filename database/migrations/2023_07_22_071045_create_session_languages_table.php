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
        Schema::create('session_languages', function (Blueprint $table) {
            $table->id();
            $table->integer('LanguageId');
            $table->integer('UserId');
            $table->timestamps();
            $table->foreign('LanguageId')
                ->references('id')
                ->on('languages')
                ->onDelete('cascade');
            $table->foreign('UserId')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_languages');
    }
};
