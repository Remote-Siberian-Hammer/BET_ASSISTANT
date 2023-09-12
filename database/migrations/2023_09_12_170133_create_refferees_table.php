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
        Schema::create('refferees', function (Blueprint $table) {
            $table->id();
            $table->integer("sport_id");
            $table->integer("rapid_sport_id");
            $table->string("slug");
            $table->string("name_ru");
            $table->string("name_en");
            $table->string("name_de");
            $table->string("name_fr");
            $table->string("name_sport");
            $table->string("photo");
            $table->string("nationality_code");
            $table->string("country_name");
            $table->string("country_flag");
            $table->integer("yellow_cards");
            $table->integer("red_cards");
            $table->integer("yellow_red_cards");
            $table->integer("game");
            $table->timestamps();
            $table->foreign("sport_id")
                ->references("id")
                ->on("sports")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refferees');
    }
};
